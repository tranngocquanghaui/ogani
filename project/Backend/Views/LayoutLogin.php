 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="../Assets/Backend/img/favicon.png" rel="icon">
  <link href="../Assets/Backend/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="../Assets/Backend/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../Assets/Backend/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../Assets/Backend/css/style.css" rel="stylesheet">
  <link href="../Assets/Backend/css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
 <?php 
              
              if(file_exists("Controllers/LoginController.php")){
                include "Controllers/LoginController.php";
              if(class_exists("LoginController")){
              
              
              //tao object cua class $controller
              $obj=new LoginController();
              //lay bien action truyen tu url(day la ham  ben trong class), neu co thi goi no
              
              //goi ham ben trong class
              $obj->$action();
              }
            }
             ?>

</body>

</html>