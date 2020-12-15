<!DOCTYPE html>
<html>
<head>
	<title>Ogani</title>
	<meta charset="utf-8">
	    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="../Assets/Frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../Assets/Frontend/css/style.css" type="text/css">
    
</head>
<body>
    <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f2e59bbed9d9d26270925d5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php"><img src="../Assets/Upload/Products/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="index.php?controller=cart&action=read"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
         
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="../Assets/Upload/Products/language.png" alt="">
                <div>Tiếng Việt</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">English</a></li>
                    <li><a href="#">Tiếng Việt</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i>Đăng nhập</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="index.php">Trang chủ</a></li>
                <li><a href="./shop-grid.html">Cửa Hàng</a></li>
                <li><a href="#">Sản phẩm</a>
                </li>
                <li><a href="./blog.html">Giỏ hàng</a></li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Liên lạc</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
         
            <a href="#"><i class="fa fa-linkedin"></i></a>
           
        </div>
    </div>
    <!-- Humberger End -->


    <!-- Header Section Begin -->
   <?php include 'Views/HeaderTrangTrong.php'; ?>
    
  
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
   
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
   
                <!-- main -->
                <?php                 
                            //kiem tra xem file do co ton tai khong, neu co ton tai thi load vao day            
                            if(file_exists($fileController))
                            {
                                include $fileController;      
                                //VD: include "Controllers/UsersController.php";          
                                //tao object cua class $controller
                                if(class_exists($className))
                                {
                                    $obj = new $className(); 
                                    //$obj = new Users(); 
                                    //goi ham ben trong class
                                    $obj->$action();
                                    //$obj->Read();
                                }
                            }
                         ?>
                         <!-- end main -->

            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="index.php"><img src="../Assets/Frontend/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by Trần Ngọc Quang
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="../Assets/Upload/Products/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="../Assets/Frontend/js/jquery-3.3.1.min.js"></script>
    <script src="../Assets/Frontend/js/bootstrap.min.js"></script>
    <script src="../Assets/Frontend/js/jquery.nice-select.min.js"></script>
    <script src="../Assets/Frontend/js/jquery-ui.min.js"></script>
    <script src="../Assets/Frontend/js/jquery.slicknav.js"></script>
    <script src="../Assets/Frontend/js/mixitup.min.js"></script>
    <script src="../Assets/Frontend/js/owl.carousel.min.js"></script>
    <script src="../Assets/Frontend/js/main.js"></script>




</body>

</html>