<?php 
class Connection{
	public static function getInstance(){
		$connection=new PDO("mysql:host=sql102.byethost.com;dbname=b17_26454930_php47_project","b17_26454930","quangha2612");
		//Lay du lieu theo utf8
		$connection->exec("set names utf8");
		//dat cach de thuc hien lay du lieu
		$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		return $connection;
	}
}

 ?>