<?php 
	include 'Models/SearchModel.php';
	class SearchController extends SearchModel{
		public function searchParameter(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->totalRecordSearchParameter()/$recordPerPage);
			//goi ham ModelRead tu class ProductsModel de lay ket qua
			$listRecord = $this->modelSearchParameter($recordPerPage);
			//load view
			include "Views/ProductsSearchParameter.php";
		}
	}
 ?>