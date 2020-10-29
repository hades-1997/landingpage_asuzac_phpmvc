<?php
    session_start();
if(!isset($_SESSION['username'])):
    header('location: login.php');
endif;
    include("DataCrud.php");
    $db = new DataCrud();
if(isset($_POST['Submit'])):
    $oldpass = md5($_POST['oldpassword']);
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    if ($oldpass != '' && $newpassword != '' && $confirmpassword != '') :
        $username = $_SESSION['username'];
        $stament_dem = "SELECT * FROM admin WHERE adminpassword = ? AND nameuser = ?";
        $tempuser = [
            $oldpass,
            $_SESSION['username']
        ];
        $stmt = $db ->selectDataParam($stament_dem, $tempuser);
        if($stmt->rowCount() != 0) :
            if($newpassword !== $confirmpassword) :
                echo "<script type='text/javascript'>alert(\"Nhập lại mật khẩu không đúng.\");</script>";
            else :
                $newpassword = md5($newpassword);
                $stament = "UPDATE admin SET adminpassword = ? WHERE nameuser = ?";
                $param = [
                    $newpassword,
                    $_SESSION['username']
                ];
                $stmt = $db ->updateParam($stament, $param);
                echo "<script type='text/javascript'>alert(\"Đổi mật khẩu thành công.\");</script>";
                header('location: admin.php');
            endif;
        else :
            echo "<script type='text/javascript'>alert(\"Mật khẩu cũ không đúng .\");</script>";
        endif;
    else :
        echo "<script type='text/javascript'>alert(\"Vui lòng điền đủ thông tin .\");</script>";
    endif;
endif;
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recover Password - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form name="chngpwd" action="" method="post" onSubmit="return valid();">
                    <div class="login-form-head">
                        <h4>Đổi Mật Khẩu:</h4>
                        <p>Bạn Muốn Thay Đổi Mật Khẩu</p>
                    </div>

                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="oldpassword">Mật Khẩu Cũ</label>
                            <input type="password" id="exampleInputPassword1" name="oldpassword">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="form-gp">
                            <label for="newpassword">Mật Khẩu Mới</label>
                            <input type="password" id="exampleInputPassword2" name="newpassword">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="form-gp">
                            <label for="confirmpassword">Nhập lại mật Khẩu Mới</label>
                            <input type="password" id="exampleInputPassword3" name="confirmpassword">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="submit-btn-area mt-5">
                            <button id="form_submit" type="Submit" name="Submit">Thay Đổi <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="text-center mt-4">
                            <a href="../../../index.php">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>