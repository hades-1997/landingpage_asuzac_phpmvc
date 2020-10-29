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
                                                <td>Id Employee</td>
                                                <td>Full Name</td>
                                                <td>Email</td>
                                                <td>Status</td>
                                                <td></td>
                                            </tr>
                                            <?php foreach ($data["Employee"] as $item){?>
                                            <tr class="heading-td">
                                                <td><?= $item["id"]?></td>
                                                <td><?= $item["fullname"]?></td>
                                                <td><?= $item["email"]?></td>
                                                <td><?= $item["name"]?></td>
                                                <td>
                                                    <a href="javacript:void(0)">
                                                        <button class="btn btn-info btn-sm">
                                                            <i class="fa fa-edit"></i>
                                                    </button>
                                                    </a>
                                                    <!-- <a href="#"> -->
                                                        <button class="btn btn-danger btn-sm btn-delete"
                                                                eventCode="javacript:void(0)"><i class="fa fa-trash-o"></i>
                                                        </button>
                                                    <!-- </a> -->
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
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
 <script>
     function display(el) {
         var id = $(el).attr('id');
         alert("dfsdfsfs");
     }
 </script>