<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin</title>

  <!-- Favicons -->
  <link href="../Assets/Backend/img/favicon.png" rel="icon">
  <link href="../Assets/Backend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../Assets/Backend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../Assets/Backend/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="../Assets/Backend/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="../Assets/Backend/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="../Assets/Backend/css/style.css" rel="stylesheet">
  <link href="../Assets/Backend/css/style-responsive.css" rel="stylesheet">
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <script src="../Assets/Backend/lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
             
              
          <!-- settings end -->
          <!-- inbox dropdown start-->
         
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="index.php?controller=login&action=logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="../Assets/Backend/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Xin chào, <?php echo $_SESSION["email"]; ?></h5>
          <li class="sub-menu">
            <a href="index.php?controller=Categories&action=read">
              <i class="fa fa-desktop"></i>
              <span>Danh mục sản phẩm</span>
              </a>
  
          </li>
          <li class="sub-menu">
            <a href="index.php?controller=Products&action=read">
              <i class="fa fa-cogs"></i>
              <span>Chi tiết sản phẩm</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="index.php?controller=Users&action=read">
              <i class="fa fa-book"></i>
              <span>Quản lý Users</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="index.php?controller=Parameters&action=read">
              <i class="fa fa-book"></i>
              <span>Thuoc tinh san pham</span>
              </a>
            
          </li>
             <li class="sub-menu">
            <a href="index.php?controller=Orders&action=read">
              <i class="fa fa-book"></i>
              <span>Quản lý đơn hàng</span>
              </a>
            
          </li>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
         <?php                 
                //kiem tra xem file do co ton tai khong, neu co ton tai thi load vao day            
                if(file_exists($fileController))
                {
                    include $fileController;      
                              
                    //tao object cua class $controller
                    if(class_exists($className))
                    {
                        $obj = new $className(); 
                        //$obj = new Users(); 
                       
                        //goi ham ben trong class
                        $obj->$action();
                        //$obj->read();
                    }
                }
             ?>
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
      
          Designed by Trần Ngọc Quang <a href="https://templatemag.com/"></a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="../Assets/Backend/lib/jquery/jquery.min.js"></script>

  <script src="../Assets/Backend/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="../Assets/Backend/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="../Assets/Backend/lib/jquery.scrollTo.min.js"></script>
  <script src="../Assets/Backend/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="../Assets/Backend/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="../Assets/Backend/lib/common-scripts.js"></script>
  <script type="../Assets/Backend/text/javascript" src="../Assets/Backend/lib/gritter/js/jquery.gritter.js"></script>
  <script type="../Assets/Backend/text/javascript" src="Asset/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="../Assets/Backend/lib/sparkline-chart.js"></script>
  <script src="../Assets/Backend/lib/zabuto_calendar.js"></script>
  
</body>

</html>
