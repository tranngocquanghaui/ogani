<?php 
	include 'Models/CartModel.php';
	class CartController extends CartModel{
		public function read(){
			include 'Views/Cart.php';
		}
		public function add(){
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			//goi ham cartAdd tu model
			$this->cartAdd($id);
			//den trang gio hang
			echo "<script>location.href='index.php?controller=cart&action=read';</script>";
		}
		public function update(){
			//duyet cac phan tu trong gio hang
			foreach($_SESSION["cart"] as $product){
				if(isset($_POST["product_".$product["id"]])){
					$number = $_POST["product_".$product["id"]];
					$this->cartUpdate($product["id"],$number);
				}
			}
			//den trang gio hang
			echo "<script>location.href='index.php?controller=cart&action=read';</script>";
		}
			//xoa san pham khoi gio hang
		public function delete(){
			$id = isset($_GET["id"]) ? $_GET["id"]:0;
			//goi ham cartAdd tu model
			$this->cartDelete($id);
			//den trang gio hang
			echo "<script>location.href='index.php?controller=cart&action=read';</script>";
		}
		//thanh toan gio hang
		public function checkout(){
			$this->cartCheckOut();
			//xoa toan bo san pham trong gio hang
			$this->cartDestroy();
			//den trang gio hang
			echo "<script>location.href='index.php?controller=cart&action=read';</script>";
		}
	}

 ?>