<?php
        $_COOKIE['role'] = $_SESSION['status'];
        //echo $_COOKIE['role'];
?>
<div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="javascript:void(0)">
                <!--            <img src="assets/images/icon/logo.png" alt="logo">-->
                <h4>Đắc Lợi</h4>
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i>
                            <span>Dashboard</span></a>
                        <ul class="collapse">
                            <li class="active">
                                <a href="javascript:void(0)">Dashboard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="ti-layout-sidebar-left"></i>
                            <span>Event </span></a>
                        <ul class="collapse">
                            <li><a href="" style="display: <?php if($_COOKIE['role']==2){
                                echo "none";
                                } ?>">ADD EVENT</a></li>
                            <li><a href="">ALL EVENT</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="ti-pie-chart"></i>
                            <span>IMAGES</span></a>
<!--                        <ul class="collapse">-->
<!--                            <li><a href="#">ADD IMAGES</a></li>-->
<!--                            <li><a href="#">ALL IMAGES</a></li>-->
<!--                        </ul>-->
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="ti-palette"></i>
                            <span>HISTORY</span></a>
<!--                        <ul class="collapse">-->
<!--                            <li><a href="#">ADD HISTORY</a></li>-->
<!--                            <li><a href="#">ALL HISTORY</a></li>-->
<!--                        </ul>-->
                    </li>

                    <li>
                        <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-table"></i>
                            <span>EMPLOYEES</span></a>
                        <ul class="collapse">
                            <li><a href="javascript:void(0)">ADD EMPLOYEES</a></li>
                            <li><a href="./admin/employee">ALL EMPLOYEES</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="ti-map-alt"></i>
                            <span>CUSTOMER</span>

                        </a>
                        <ul class="collapse">
                            <li><a href="#">ADD CUSTOMER</a></li>
                            <li><a href="#">ALL CUSTOMER</a></li>
                        </ul>
                    </li>


                    <li><a href="#">
                            <i class="ti-receipt"></i>
                            <span>SUPORT ADMIN </span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>