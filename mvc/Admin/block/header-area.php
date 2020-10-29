<div class="header-area">
    <div class="row align-items-center">
        <!-- menu -->
        <div class="col-md-6 col-sm-8 clearfix">
            <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="search-box pull-left">
                <form action="#">
                    <input type="text" name="search" placeholder="Search..." required>
                    <i class="ti-search"></i>
                </form>
            </div>
        </div>
        <!--end menu --->
        <!-- Thông Báo -->
        <div class="col-md-6 col-sm-4 clearfix">
            <ul class="notification-area pull-right">
                <li id="full-view"><i class="ti-fullscreen"></i></li>
                <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                <li class="dropdown">
                    <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                        <span>0</span>
                    </i>
                    <div class="dropdown-menu bell-notify-box notify-box">
                        <span class="notify-title">Bạn Không Có Thông Báo Mới <a href="#">Xem Tất Cả</a></span>
                        <div class="nofity-list">

                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>0</span></i>
                    <div class="dropdown-menu notify-box nt-enveloper-box">
                        <span class="notify-title">Bạn Không Có Tin Nhắn Mới <a href="#">Xem Tất Cả</a></span>
                        <div class="nofity-list">
                        </div>
                    </div>
                </li>
                <li class="settings-btn">
                    <i class="ti-settings"></i>
                </li>
            </ul>
        </div>
        <!-- end Thông Báo -->
    </div>
</div>
<!-- header area end -->
<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Dashboard</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><span><?php echo $data["Page"] ?></span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <div class="user-profile pull-right">
                <!--            <img class="avatar user-thumb" src="./assets/images/author/avatar.png" alt="avatar">-->
                <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                    <?php if(isset($_SESSION['email'])):
                        echo $_SESSION['email'];
                    endif;?>
                    <i class="fa fa-angle-down"></i></h4>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0)">Đăng Xuất</a>
                    <hr style="margin-top: 1rem;">
                    <a class="dropdown-item" href="javascript:void(0)">Reset Password</a>
                </div>
            </div>
        </div>
    </div>
</div>