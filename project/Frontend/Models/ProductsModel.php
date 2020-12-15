<?php 
	class ProductsModel{
			//lay ten danh muc
		public function getCategoryName($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select name from categories where id = $category_id");
			//lay mot ban ghi
			return $query->fetch();
		}
		//chi tiet san pham
		public function modelDetail($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where id = $id");
			//lay mot ban ghi
			return $query->fetch();
		}
		
		public function modelRelative(){
			$conn=Connection::getInstance();
			$name= isset($_GET['name'])? $_GET['name']: "";
			$id= isset($_GET['id'])? $_GET['id']: "";
			$query=$conn->query("select* from products where name like '%$name%' and id !=$id limit 4 ");
			return $query->fetchAll();
		}

		public function modelRead($recordPerPage,$category_id){
			//------
			//sap xep khoang gia
			$groupPrice = isset($_GET["groupPrice"]) ? $_GET["groupPrice"]:"";
			// //sap xep tang giam dan
			// $order = isset($_GET["order"]) ? $_GET["order"]:"";
			// //sap xep so ban ghi tren trang
			// $pageSize = isset($_GET["pageSize"]) ? $_GET["pageSize"]:"";
			 $strWhere = "";
			switch ($groupPrice) {
				case '1tr-5tr':
					$strWhere = " and price BETWEEN 1000000 and 5000000 ";
					break;
				case '5tr-10tr':
					$strWhere = " and price BETWEEN 5000000 and 10000000 ";
					break;
				case '10tr-15tr':
					$strWhere = " and price BETWEEN 10000000 and 15000000 ";
					break;
				case '15tr-20tr':
					$strWhere = " and price BETWEEN 15000000 and 20000000 ";
					break;
				case '20tr':
					$strWhere = " and price >20000000 ";
					break;
			}
			// //---
			// $strOrder = "order by id desc";
			// switch ($order) {
			// 	case 'priceAsc':
			// 		$strOrder = " order by price asc ";
			// 		break;
			// 	case 'priceDesc':
			// 		$strOrder = " order by price desc ";
			// 		break;
			// 	case 'nameAsc':
			// 		$strOrder = " order by name asc ";
			// 		break;
			// 	case 'nameDesc':
			// 		$strOrder = " order by name desc ";
			// 		break;
			// }
			// //------
			// if($pageSize > 0)
			// 	$recordPerPage = $pageSize;
			// //---
			//phan trang
			//tinh so trang
			//ham ceil la ham lay gia tri tran. vd: 2.3 = 3
			$numPage = ceil($this->totalRecord($category_id)/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();			
			//thuc hien truy van
			$query = $conn->query("select * from products where category_id = $category_id $strWhere order by id desc limit $from,$recordPerPage");
			//lay tat cac ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
		//tinh tong so ban ghi

		public function totalRecord($category_id){
				$groupPrice = isset($_GET["groupPrice"]) ? $_GET["groupPrice"]:"";
			// //sap xep tang giam dan
			// $order = isset($_GET["order"]) ? $_GET["order"]:"";
			// //sap xep so ban ghi tren trang
			// $pageSize = isset($_GET["pageSize"]) ? $_GET["pageSize"]:"";
			 $strWhere = "";
			switch ($groupPrice) {
				case '1tr-5tr':
					$strWhere = " and price BETWEEN 1000000 and 5000000 ";
					break;
				case '5tr-10tr':
					$strWhere = " and price BETWEEN 5000000 and 10000000 ";
					break;
				case '10tr-15tr':
					$strWhere = " and price BETWEEN 10000000 and 15000000 ";
					break;
				case '15tr-20tr':
					$strWhere = " and price BETWEEN 15000000 and 20000000 ";
					break;
				case '20tr':
					$strWhere = " and price >20000000 ";
					break;
			}
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from products where category_id = $category_id $strWhere");
			return $query->rowCount();
		}
		public function modelSearch($recordPerPage){
			//phan trang
			//tinh so trang
			//ham ceil la ham lay gia tri tran. vd: 2.3 = 3
			$numPage = ceil($this->totalRecordSearch()/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();	
			//---
			$key = isset($_GET["key"]) ? $_GET["key"]:"";
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"]:0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"]:0;
			//---
			$strWhere = "";
			if($fromPrice > 0 && $toPrice > 0)
				$strWhere = " and price BETWEEN $fromPrice and $toPrice ";
			//---		
			//thuc hien truy van
			$query = $conn->query("select * from products where name like '%$key%' $strWhere  limit $from,$recordPerPage");
			//lay tat cac ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecordSearch(){
			$key = isset($_GET["key"]) ? $_GET["key"]:"";
			$fromPrice = isset($_GET["fromPrice"]) ? $_GET["fromPrice"]:0;
			$toPrice = isset($_GET["toPrice"]) ? $_GET["toPrice"]:0;
			//---
			$strWhere = "";
			if($fromPrice > 0 && $toPrice > 0)
				$strWhere = " and price BETWEEN $fromPrice and $toPrice ";
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from products where name like '%$key%' $strWhere");
			return $query->rowCount();
		}
		public function modelSearchParameter($recordPerPage){
			//phan trang
			//tinh so trang
			//ham ceil la ham lay gia tri tran. vd: 2.3 = 3
			$numPage = ceil($this->totalRecordSearch()/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();	
			//---
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			//---		
			//thuc hien truy van
			$query = $conn->query("select * from products where id in (select product_id from product_parameters where parameter_id = $id) limit $from,$recordPerPage");
			//lay tat cac ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecordSearchParameter(){
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from products where id in (select product_id from product_parameters where parameter_id = $id) ");
			return $query->rowCount();
		}
	
	}

 ?>