<?php
    session_start();
if(isset($_SESSION['username'])):
    header('location: admin.php');
endif;
    include("DataCrud.php");
    $db = new DataCrud();
if(isset($_POST['Submit'])):
    $email = $_POST['email'];
    if ($email != '') :
        $stament_dem = "SELECT email from admin where email = ?";
        $param = [
            $email
        ];
        $stmt = $db ->selectDataParam($stament_dem, $param);
        if($stmt->rowCount() != 0) :
            $token = bin2hex(random_bytes(50));
            $stament = "INSERT INTO resetpassword (email, token) VALUES (?, ?)";
            $param = [
                $email, $token
            ];
            $stmt = $db ->updateParam($stament, $param);

            $to = $email;
            $subject = 'Đặt lại mật khẩu tài khoản trang vancn.com';
            $msg = "Hi, click vào <a href=\"http://localhost:8080/adminvan/srtdash/new-pass.php?token=" . $token . "\">đây</a> để cập nhật mật khẩu mới";
            $msg = wordwrap($msg,70);
            $headers = 'From: nguyenkhanh4795@gmail.com';
            mail($to, $subject, $msg, $headers);
            header('location: pending.php?email=' . $email);
        else :
            echo "<script type='text/javascript'>alert(\"Email không tồn tại trong hệ thống .\");</script>";
        endif;
    else :
        echo "<script type='text/javascript'>alert(\"Vui lòng nhập email .\");</script>";
    endif;
endif;
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Forgot Password - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form name="sendMail" action="" method="post" onSubmit="">
                    <div class="login-form-head">
                        <h4>Quên mật khẩu</h4>
                        <p>Bạn đã quên mật khẩu? Đặt lại ngay bây giờ</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" id="exampleInputEmail1" name="email">
                            <i class="ti-lock"></i>
                        </div>
                        <div class="submit-btn-area mt-5">
                            <button id="form_submit" type="submit" name="Submit">Send <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="text-center mt-4">
                            <a href="../login.php">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>