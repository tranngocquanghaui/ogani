<?php 
include 'Models/HomeModel.php';
class HomeController extends HomeModel{
	public function newProducts(){
		$products=$this->modelNewProducts();

		include 'Views/HomeNewProducts.php';
	}
	public function newtProducts(){
		$product=$this->modelNewtProducts();

		include 'Views/HomeNewtProducts.php';
	}
	//newcategoriesProduct
		public function newCategoryProducts(){
		$products=$this->modelNewProducts();

		include 'Views/NewCategoryProducts.php';
	}
	public function newtCategoryProducts(){
		$products=$this->modelNewtProducts();

		include 'Views/NewtCategoryProducts.php';
	}
	public function hotProducts(){
		$products=$this->modelHotProducts();
		include 'Views/HomeHotProducts.php';
	}
	public function hottProducts(){
		$producthot=$this->modelHottProducts();
		include 'Views/HomeHottProducts.php';
	}
	
	public function discountProducts(){
		$products=$this->modelDiscountProducts();
		include 'Views/HomeDiscountProducts.php';
	}
	public function oldProducts(){
		$products=$this->modelOldProducts();
		include 'Views/HomeOldProducts.php';
	}
	public function olddProducts(){
		$products=$this->modelOlddProducts();
		include 'Views/HomeOlddProducts.php';
	}
}

 ?>