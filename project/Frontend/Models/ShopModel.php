<?php 
	class ShopModel{
		//lay bien ket noi
		public function modelShop($recordPerPage){
				//sap xep khoang gia
			$groupPrice = isset($_GET["groupPrice"]) ? $_GET["groupPrice"]:"";
			// //sap xep tang giam dan
			// $order = isset($_GET["order"]) ? $_GET["order"]:"";
			// //sap xep so ban ghi tren trang
			// $pageSize = isset($_GET["pageSize"]) ? $_GET["pageSize"]:"";
			 $strWhere = "";
			switch ($groupPrice) {
				case '1tr-5tr':
					$strWhere = " where price BETWEEN 1000000 and 5000000 ";
					break;
				case '5tr-10tr':
					$strWhere = " where price BETWEEN 5000000 and 10000000 ";
					break;
				case '10tr-15tr':
					$strWhere = " where price BETWEEN 10000000 and 15000000 ";
					break;
				case '15tr-20tr':
					$strWhere = " where price BETWEEN 15000000 and 20000000 ";
					break;
				case '20tr':
					$strWhere = "where price >20000000 ";
					break;
			}
			$p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			$conn=Connection::getInstance();
			$numPage = ceil($this->totalRecord()/$recordPerPage);
			//lay bien p truyen tu url
			
			//lay tu ban ghi nao
			
			//---
			//lay bien ket noi	
			//thuc hien truy van
			$query = $conn->query("select * from products $strWhere  order by id desc limit $from,$recordPerPage");
			//lay tat cac ket qua tra ve
			
		
		//truy van
		$result=$query->fetchAll();

		return $result;
		}
		public function totalRecord(){
			$conn=Connection::getInstance();
		//truy van
		$query=$conn->query("select*from products");
		return $query->rowCount();
		}
	}
	
 ?>