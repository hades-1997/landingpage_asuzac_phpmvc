<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--    ckeditor-->
    <script src="../ckeditor/ckeditor.js"></script>
    <script src="../ckeditor/adapters/jquery.js"></script>
    <script src="../ckfinder/ckfinder.js"></script>
    <!--     include ckeditor -->
    <!--    <script src="ckeditor/ckeditor.js"></script>-->
    <!--    <script src="ckeditor/adapters/jquery.js"></script>-->
</head>

<body>
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- preloader area end -->

<div class="page-container">
    <!-- sidebar -->
    <div class="sidebar-menu">
        <?php
        include('../sidebar.php');
        ?>
    </div>
    <!-- sidebar menu area end -->
    <!-- main content area start -->
    <div class="main-content">
        <!-- header area start -->
        <div class="header-area">
            <?php include('../headeradmin.php');?>
        </div>
        <!-- header area end -->
        <!-- page title area start -->
        <div class="page-title-area">
            <?php include('../navadmin.php');?>
        </div>
        <!-- page title area end -->
        <div class="main-content-inner">
            <!-- order list area end -->
            <div class="row">
                <!-- product sold area start -->
                <div class="col-xl-12 col-lg-12 col-md-12 mt-5">
                    <div class="card" >
                        <div class="card-body">
                            <div id="visitor_graph">
                                <div class="table-responsive">
                                    <table class="dbkit-table">
                                        <tbody>
                                        <tr class="heading-td">
                                            <td>ID Customer</td>
                                            <td>Customer Name</td>
                                            <td>Email</td>
                                            <td>Hotline</td>
                                            <td>Date Time</td>
                                            <td></td>
                                        </tr>
                                        <tr class="heading-td">
                                            <td>Product Name</td>
                                            <td>Revenue</td>
                                            <td>Sold</td>
                                            <td>Discount</td>
                                            <td>Hotline</td>
                                            <td>
                                                <a href="#">
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                                                    </button>
                                                </a>
                                                <a href="#">
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product sold area end -->
                <!-- team member area start -->

            </div>
        </div>
    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <?php include('../footer.php');?>
        </div>
    </footer>
    <!-- footer area end-->
</div>

<div class="offset-area">
    <?php include('../offset.php');?>
</div>
<!-- offset area end -->
<!-- jquery latest version -->
<script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/metisMenu.min.js"></script>
<script src="../assets/js/jquery.slimscroll.min.js"></script>
<script src="../assets/js/jquery.slicknav.min.js"></script>
<script src="../assets/js/plugins.js"></script>
<script src="../assets/js/scripts.js"></script>
</body>

</html>
