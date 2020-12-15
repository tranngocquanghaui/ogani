<?php 
	class HomeModel{
		public function modelNewProducts(){
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products order by id desc limit 0,3");
			//lay tat cac ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
			public function modelNewtProducts(){
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products order by id desc limit 3,3");
			//lay tat cac ket qua tra ve
			$result = $query->fetchAll();
			return $result;
		}
			//san pham noi bat
		public function modelHotProducts(){
			$conn = Connection::getInstance();
				//thuc hien truy van
				$query = $conn->query("select * from products where hot=1 order by id desc limit 0,3");
				//lay tat cac ket qua tra ve
				$result = $query->fetchAll();
				return $result;
		} 
		public function modelHottProducts(){
			$conn = Connection::getInstance();
				//thuc hien truy van
				$query = $conn->query("select * from products where hot=1 order by id desc limit 3,3");
				//lay tat cac ket qua tra ve
				$result = $query->fetchAll();
				return $result;
		}
		public function modelOldProducts(){
			$conn = Connection::getInstance();
				//thuc hien truy van
				$query = $conn->query("select * from products order by id asc limit 0,3");
				//lay tat cac ket qua tra ve
				$result = $query->fetchAll();
				return $result;
		}
		public function modelOlddProducts(){
			$conn = Connection::getInstance();
				//thuc hien truy van
				$query = $conn->query("select * from products  order by id asc limit 3,3");
				//lay tat cac ket qua tra ve
				$result = $query->fetchAll();
				return $result;
		}
		public function modelDiscountProducts(){
			//lay bien ket noi
			$conn=Connection::getInstance();
			//thuc hien truy van
			$query=$conn->query("select *from products where discount!=0 order by id desc limit 0,8");
			$result=$query->fetchAll();
			return $result;

		}
	}
 ?>