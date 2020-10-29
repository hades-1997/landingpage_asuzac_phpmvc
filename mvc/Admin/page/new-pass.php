<?php
    session_start();
if(isset($_SESSION['username'])):
    header('location: admin.php');
endif;
    include("DataCrud.php");
    $db = new DataCrud();
if(isset($_POST['Submit'])):
    $newpassword = $_POST['newpassword'];
    $confirmpassword = $_POST['confirmpassword'];
    if ($newpassword != '' && $confirmpassword != '') :
        if($newpassword !== $confirmpassword) :
            echo "<script type='text/javascript'>alert(\"Nhập lại mật khẩu không đúng.\");</script>";
        else :
            $token = $_GET['token'];
            $stament_dem = "SELECT email FROM resetpassword where token = ? LIMIT 1";
            $param = [
                $token
            ];
            $stmt = $db ->selectDataParam($stament_dem, $param);
            if($stmt->rowCount() != 0) :
                $email = $stmt->fetch(PDO::FETCH_ASSOC)['email'];
                $newpassword = md5($newpassword);
                $stament = "UPDATE admin SET adminpassword = ? WHERE email = ?";
                $param = [
                    $newpassword,
                    $email
                ];
                $stmt = $db ->updateParam($stament, $param);
                echo "<script type='text/javascript'>alert(\"Cập nhật mật khẩu thành công.\");</script>";
                header('location: login.php');
            else :
                echo "<script type='text/javascript'>alert(\"Không tìm thấy email .\");</script>";
            endif;
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
    <title>Update Password - srtdash</title>
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
                        <h4>Đặt lại mật khẩu</h4>
                        <p>Nhập mật khẩu mới để bảo vệ tài khoản của bạn</p>
                    </div>

                    <div class="login-form-body">
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
                            <button id="form_submit" type="Submit" name="Submit">Đặt Lại<i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="text-center mt-4">
                            <a href="../login.php">Quay lại</a>
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