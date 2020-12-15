<?php 
include 'Models/LoginModel.php';
	class LoginController extends LoginModel{
		public function index(){
			//load view
			include'Views/LoginView.php';
		}
		//khi an nut submit 
		public function loginPost(){
			//goi ham checkLogin trong model de kiem tra
			$this->checkLogin();
			//quay lai trang index
			header("location:index.php");
		}
		public function logout(){
			//huy bien session
			unset($_SESSION["email"]);
			//quay tro lai trang index
			echo "<script>location.href='index.php';</script>";
		}
	}

 ?>