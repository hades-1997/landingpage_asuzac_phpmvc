<?php
    session_start();
    include ('../DataCrud.php');
    $db = new DataCrud();
    $id = $_GET['id'];
    $image = '';

    $statement = "SELECT * FROM eventvalve WHERE id = ?";
    $param = [ 
        $id
    ];
    $stmt = $db -> selectDataParam($statement, $param);
    $stmtGetAvatar = $db -> selectDataParam($statement, $param);

    if($stmtGetAvatar->rowCount() != 0) :
        while($event = $stmtGetAvatar->fetch(PDO::FETCH_ASSOC)):
            $image = $event['avatar'];
        endwhile;
    endif;

    if($_SERVER['REQUEST_METHOD']=='POST'):
        if ($_FILES['avatar']['name']!= ''):
          $name = basename($_FILES['avatar']['name']);
          $ext = pathinfo($name, PATHINFO_EXTENSION);

          function generateRandomString($length = 35) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
          }

          $image = generateRandomString().".".$ext;

          move_uploaded_file($_FILES['avatar']['tmp_name'],
              '../../../pictures/catolog/tintuc/anhdaidien/'.$image);

        endif;

        $statement = "UPDATE eventvalve SET title = ?, shortDes = ?, link = ?, avatar = ?, eventDate = ? WHERE id = ?";
        $param = [
                $_POST['title'],
                $_POST['shortDes'],
                $_POST['link'],
                $image,
                $_POST['eventDate'],
                $id
        ];
        $stmt = $db -> updateParam($statement, $param);
        header("Location: employee.php");
    endif;
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../../assets/css/typography.css">
    <link rel="stylesheet" href="../../assets/css/default-css.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../../assets/js/vendor/modernizr-2.8.3.min.js"></script>
<!--    ckeditor-->
    <script src="../../ckeditor/ckeditor.js"></script>
    <script src="../../ckeditor/adapters/jquery.js"></script>
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
            <!-- product sold area start -->
            <form method="POST" enctype="multipart/form-data">
            <?php
                if($stmt->rowCount() != 0) :
                    while($event = $stmt->fetch(PDO::FETCH_ASSOC)):
                        $image = $event['avatar'];
            ?>
              <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nameproduct" class="col-form-label">Tiêu đề</label>
                                <hr>
                                <input class="form-control" type="text" value="<?= $event['title'] ?>" id="example-text-input" name="title">

                            </div>
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Mô tả ngắn</label>
                                <hr>
                                <textarea id="editor1" name="shortDes" cols="80" rows="15"><?= $event['shortDes'] ?></textarea>
                                <script>
                                    CKEDITOR.replace( 'shortDes',
                                        {
                                            filebrowserBrowseUrl : 'http://localhost:63342/adminvan/ckfinder/ckfinder.html',
                                            filebrowserImageBrowseUrl : 'http://localhost:63342/adminvan/ckfinder/ckfinder.html?type=Images',
                                            filebrowserFlashBrowseUrl : 'http://localhost:63342/adminvan/ckfinder/ckfinder.html?type=Flash',
                                            filebrowserUploadUrl : 'http://localhost:63342/adminvan/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                            filebrowserImageUploadUrl : 'http://localhost:63342/adminvan/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                            filebrowserFlashUploadUrl : 'http://localhost:63342/adminvan/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                                        });
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="nameproduct" class="col-form-label">Đường dẫn tới bài viết</label>
                                <hr>
                                <input class="form-control" type="text" value="<?= $event['link'] ?>" name="link">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product sold area end -->
                <!-- team member area start -->
                <div class="col-xl-4 col-lg-4 col-md-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Ảnh đại diện</label>
                                <hr>
                                <img  alt="" src="../../../pictures/catolog/tintuc/anhdaidien/<?= $event['avatar'] ?>" id="profileDisplay" height="250" width="250" > <br/><br/>
                                <input type="file" name="avatar" onChange="displayImage(this)" id="profileImage" accept="image/*">
                                <script>
                                    function displayImage(e) {
                                        if (e.files[0]) {
                                            var reader = new FileReader();
                                            reader.onload = function(e){
                                                document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                                            }
                                            reader.readAsDataURL(e.files[0]);
                                        }
                                    }
                                </script>
                            </div>

                            <!-- <div class="form-group">
                                <label for="example-text-input" class="col-form-label">Ảnh bổ sung (có thể chọn nhiều ảnh một lúc)</label>
                                <hr>
                                <input type="file" name="images" multiple accept="image/*">
                            </div> -->
                            <div class="form-group">
                                <label for="example-date-input" class="col-form-label">Ngày</label>
                                <input class="form-control" type="date" value="<?php echo date($event['eventDate']) ?>" id="example-date-input" name="eventDate">
                                <br/> <br/>
                                <button type="submit" class="btn btn-primary" name="submit" >Đăng</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
                <!-- team member area end -->
            <?php
                    endwhile;
                endif;
            ?>
            </form>
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
<script src="../../assets/js/vendor/jquery-2.2.4.min.js"></script>
<!-- bootstrap 4 js -->
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/owl.carousel.min.js"></script>
<script src="../../assets/js/metisMenu.min.js"></script>
<script src="../../assets/js/jquery.slimscroll.min.js"></script>
<script src="../../assets/js/jquery.slicknav.min.js"></script>
<script src="../../assets/js/plugins.js"></script>
<script src="../../assets/js/scripts.js"></script>
</body>

</html>
