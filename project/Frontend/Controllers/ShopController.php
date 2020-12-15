<?php 
    include 'Models/ShopModel.php';
    class ShopController extends ShopModel{
        public function read(){
            $recordPerPage = 9;
            //tinh so trang
            $numPage = ceil($this->totalRecord()/$recordPerPage);
            //goi ham ModelRead tu class ProductsModel de lay ket qua
            $products = $this->modelShop($recordPerPage);
            include 'Views/Shop.php';
        }
        public function contact(){
            include 'Views/Contact.php';
        }
    }

 ?>