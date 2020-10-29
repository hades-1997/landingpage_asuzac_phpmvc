        <!-- page title area end -->
        <div class="main-content-inner">
            <!-- order list area end -->
            <!-- product sold area start -->
            <form method="POST" enctype="multipart/form-data">
              <div class="row" style="padding-top: 50px">
                  <table class="table table-striped table-bordered">
                      <tbody>
                      <tr>
                          <td style="width:35%;">Full Name</td>
                          <td style="width:5%;color: red">*</td>
                          <td style="width:60%;">
                              <div class="col-md-12">
                                  <input type="text" class="form-control" id="" placeholder="Full Name" value="" required="">
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>PassWord</td>
                          <td style="width:5%;color: red">*</td>
                          <td>
                              <div class="col-md-12">
                                  <input type="password" class="form-control" id="" placeholder="PassWord" value="" required="">
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>Confim Pasword</td>
                          <td style="width:5%;color: red">*</td>
                          <td>
                              <div class="col-md-12">
                                  <input type="password" class="form-control" id="" placeholder="Confim Pasword" value="" required="">
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>Email</td>
                          <td style="width:5%;color: red">*</td>
                          <td>
                              <div class="col-md-12">
                                  <input type="email" class="form-control" id="" placeholder="Email Enter" value="" required="">
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>Authorization</td>
                          <td style="width:5%;color: red">*</td>
                          <td>
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <select class="custom-select">
                                          <option selected="selected">Open this select menu</option>
                                       <?php   while ($row = mysqli_fetch_array($data["Status"])){?>
                                          <option value="<?= $row["name"]?>">
                                              <?= $row["name"]?></option>
                                          <?php } ?>
                                      </select>
                                  </div>
                              </div>
                          </td>
                      </tr>
                      </tbody>
                  </table>
                  <button type="button" class="btn btn-primary" name="save">Save</button>
              </div>
                <!-- team member area end -->
            </form>
        </div>
    </div>
    <!-- main content area end -->