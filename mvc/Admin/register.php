<?php
$dir = "http://localhost:8080/landingpage_asuzac/mvc/Admin/assets";


?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <!--    header controller-->
    <?php require_once "./mvc/Admin/block/head.php" ?>
    <!--    ===========================-->
</head>

<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="./Register/KhachHangDangKy" method="post">
                    <div class="login-form-head">
                        <h4>Đăng Kí</h4>
                        <p>Bạn Cần Đăng Kí Tài Khoản ?</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputName1">Họ Và Tên</label>
                            <input type="text" id="exampleInputName1" name="fullname">
                            <i class="ti-user"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email Của Bạn</label>
                            <input type="email" id="email" name="email">
                            <i class="ti-email"></i>
                            <div class="text-danger" id="message_email"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Nhập Mật Khẩu</label>
                            <input type="password" id="password" name="password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword2">Nhập Lại Mật Khẩu</label>
                            <input type="password" id="confirm_password" name="confirm_password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <span id="message"></span>
                        <br/>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="register">Đăng Kí <i class="ti-arrow-right"></i></button>
                            <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="javascript:void(0)">Đăng Nhập Bằng <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="javascript:void(0)">Đăng Nhập Bằng <i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Bạn Đã Có Tài Khoản ? <a href="javascript:void(0)">Đăng Nhập</a></p>
                        </div>
                        <div class="text-center mt-4">
                            <a href="javascript:void(0)">Quay lại</a>
                        </div>
                    </div>
                </form>
                <?php if(isset($data['result'])){ ?>
                    <p>
                        <?php
                        if($data["result"]==true)
                        {
                            echo '<script type="text/javascript">alert("Dang ki thanh cong")</script>';
                        } else {
                            echo "Dang ki that bai";
                        }
                        ?>

                    </p>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- login area end -->
<!--script and -->
    <?php require_once "./mvc/Admin/block/script.php" ?>
    <script>
        $('#password, #confirm_password').on('keyup', function ()
        {
            if ($('#password').val() == $('#confirm_password').val())
            {
                $('#message').html('Mật Khẩu Trùng Khớp').css('color', 'green');
            }
            else
            {
                $('#message').html('Mật Khẩu Không Trùng Khớp').css('color', 'red');
            }
        });
    </script>
</body>

</html>