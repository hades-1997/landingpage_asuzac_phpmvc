<?php
if(!isset($_SESSION["email"]))
{
    session_start();
    header("Location:http://localhost:8080/landingpage_asuzac/login");
    //session_destroy();
}
$dir = "http://localhost:8080/landingpage_asuzac/mvc/Admin/assets";
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--    header controller-->
   <?php require_once "./mvc/Admin/block/head.php"?>
    <!--    ===========================-->
</head>

<body>
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end-->
<div class="page-container">
    <!-- sidebar -->
    <?php require_once "./mvc/Admin/block/sidebar-menu.php" ?>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        <!-- header area start -->
        <?php require_once "./mvc/Admin/block/header-area.php"?>
        <!-- page title area end -->
        <?php require_once "./mvc/Admin/page/" . $data["Page"] . ".php" ?>;
    </div>
    <!-- main content area end -->
    <!--    footer controller-->
    <!-- footer area start-->
  <?php require_once "./mvc/Admin/block/footer.php"?>
<!--        ==============================-->
</body>

</html>
