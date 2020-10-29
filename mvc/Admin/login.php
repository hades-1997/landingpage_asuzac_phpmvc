<?php
$dir = "http://localhost:8080/landingpage_asuzac/mvc/Admin/assets";
//echo password_hash('123456',PASSWORD_BCRYPT)
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
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="./Login/LoginUser">
                    <div class="login-form-head">
                        <h4>Đăng Nhập</h4>
                        <p>Chào Mừng Bạn Đến Với Trình Đăng Nhập</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="username">Email Login</label>
                            <input type="email" id="exampleInputEmail1" name="email">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="password">Password</label>
                            <input type="password" id="exampleInputPassword1" name="password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Nhớ Mật Khẩu</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="javascript:void(0)">Đặt Lại Mật Khẩu?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="login">Đăng Nhập <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Bạn Chưa Có Tài Khoản? <a href="javascript:void(0)">Đăng Kí</a></p>
                        </div>
                        <div class="form-footer text-center mt-4">
                            <a href="javascript:void(0)">Quên mật khẩu</a>
                        </div>
                    </div>
                </form>
                <?php if(isset($data['Result'])){ ?>
                    <p style="color: red">
                        <?php
                        if($data["Result"]==false)
                        {


                        }
                        ?>

                    </p>
                <?php }?>
            </div>
        </div>
    </div>

    <!--script and -->
    <?php require_once "./mvc/Admin/block/script.php" ?>
</body>
</html>