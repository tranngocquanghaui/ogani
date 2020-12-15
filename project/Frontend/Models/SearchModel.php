<?php 
	class SearchModel{
		public function modelSearchParameter($recordPerPage){
			//phan trang
			//tinh so trang
			//ham ceil la ham lay gia tri tran. vd: 2.3 = 3
			$numPage = ceil($this->totalRecordSearchParameter()/$recordPerPage);
			//lay bien p truyen tu url
			$p = isset($_GET["p"])&&$_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi
			$conn = Connection::getInstance();	
			//---
			$color = isset($_GET["color"]) ? $_GET["color"]:"";
			//---		
			//thuc hien truy van
			$query = $conn->query("select * FROM products WHERE id in (SELECT product_id from product_parameters WHERE parameter_id in(SELECT parameter_id from product_parameters WHERE parameter_id=(SELECT id FROM parameters WHERE name like '%$color%')))");
			//lay tat cac ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecordSearchParameter(){
			$color = isset($_GET["color"]) ? $_GET["color"]:"";
			//lay bien ket noi
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * FROM products WHERE id in (SELECT product_id from product_parameters WHERE parameter_id in(SELECT parameter_id from product_parameters WHERE parameter_id=(SELECT id FROM parameters WHERE name like '%$color%')))");
			return $query->rowCount();
		}
	}
 ?>