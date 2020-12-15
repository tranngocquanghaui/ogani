  <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>Hi, <?php echo isset($_SESSION['customer_name'])?$_SESSION['customer_name']:""; ?></li>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
                
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                             
                            </div>
                            <div class="header__top__right__language">
                                <img src="../Assets/Frontend/img/language.png" alt="">
                                <div>Tiếng Việt</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Tiếng Việt</a></li>
                                </ul>
                            </div>
                            <?php if(!isset($_SESSION['customer_email'])): ?>
                            <div class="header__top__right__auth">
                                <a href="index.php?controller=account&action=login"><i class="fa fa-user"></i>Đăng nhập</a>
                            </div>
                            <?php else: ?>
                             <div class="header__top__right__auth">
                                <a href="index.php?controller=account&action=logout"><i class="fa fa-user"></i>Đăng xuất</a>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="../Assets/Frontend/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a  href="index.php">Trang chủ</a></li>
                            <!-- <li><a href="./shop-grid.html">Cửa hàng</a></li> -->
                            <li><a href="index.php?controller=shop&action=read">Sản phẩm</a>
                            </li>
                            <li><a href="index.php?controller=cart&action=read">Giỏ hàng</a></li>
                            
                            <li><a href="index.php?controller=shop&action=contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                <?php 
                    $number = 0;
                    $total=0;
                    if(isset($_SESSION["cart"])){
                        foreach($_SESSION["cart"] as $product){
                            $number = $number + $product["number"];
                            $total+=$product['price'];
                        }
                    }
                 ?>
                        <ul>
                            <li><a href="#"><i  class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="index.php?controller=cart&action=read"><i class="fa fa-shopping-bag"></i> <span><?php echo $number; ?></span></a></li>
                        </ul>
                       <!--  <div class="header__cart__price">item: <span><?php echo number_format($total); ?>VNĐ</span></div> -->
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
     <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                                <span><a style="color: white; font-size: 22px;" href="index.php?controller=shop&action=read">Danh mục</a></span>

                            </div>
                            <?php 
                            	//load MVC
                            	include'Controllers/HeaderController.php';
                            	$obj= new HeaderController();
                            	$obj->listCategory();
                             ?>
                    </div>
                </div>
                <div class="col-lg-9">
               		<script type="text/javascript">
	               		function ajaxSearch() {
	               			var key=document.getElementById('key').value;
	               			if(key!=""){
                                        $.ajax({
                                          url: "ajax.php?key="+key,
                                          success: function( result ) {
                                            $("#ajax-search").empty();
                                            $("#ajax-search").append(result);
                                          }
                                        });
	               					document.getElementById("ajax-search").setAttribute("style","display:block");
                                }
	               				else{
	               					document.getElementById("ajax-search").setAttribute("style","display:none");
	               			}               		
	               		}
	               		 function searchForm(event) {
                            //neu keypress la enter
                            if (event.keyCode == 13) {
                                key = document.getElementById("key").value;
                                //alert(key);
                                 location.href = "index.php?controller=products&action=search&key=" + key;
                            }
                            return false;
                        }
                           function search() {
                            key = document.getElementById("key").value;
                            location.href = "index.php?controller=products&action=search&key=" + key;
                            return false;
                        }
                       
               		</script>
                    <script type="text/javascript">
                        document.ready(function(){

                        });
                    </script>
               		<style type="text/css">
               				#box-search{
                    		position: relative;
                    	}
						#box-search ul{padding: 0px;margin: 0px;list-style: none; position: absolute;z-index: 10; width: 100%;background: #fff;
							display: none;
						}
						#box-search img{
							width: 70px;
						}
						#box-search ul li{
							border-bottom: 1px solid #dddddd;
						}
						#key{
                            width: 100%;
                        }
                        #ajax-search ul li{
                            display: block;

                        }
                       
               		</style>
                   
                    <div id="box-search" class="hero__search">
                        <div class="hero__search__form">
                            <form >
                               
                                <input id="key" type="text" onkeyup="ajaxSearch();" onkeypress="searchForm(event);"  placeholder="Bạn muốn tìm gì?">
                                <button type="submit" class="site-btn"onclick="return search();">Tìm kiếm</button>
                            </form>
                            <ul id="ajax-search" >
                        	
                        	
                            </ul>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+84 368883858</h5>
                                <span>hỗ trợ 24/7</span>
                            </div>
                        </div>
                    </div>
                    </div>
    </div>
    </div>
    </section>
                      
                        
                   