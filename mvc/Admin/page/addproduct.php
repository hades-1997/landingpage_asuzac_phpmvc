<!-- page title area end -->
<div class="main-content-inner">
    <!-- order list area end -->
    <!-- product sold area start -->
    <form method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nameproduct" class="col-form-label">Tiêu đề</label>
                            <hr>
                            <input class="form-control" type="text" value="" id="example-text-input" name="title">

                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Mô tả ngắn</label>
                            <hr>
                            <textarea name="" rows="15" class="tinymce"></textarea>

                            <script type="text/javascript">
                                tinymce.init({
                                    selector: 'textarea',  // change this value according to your HTML
                                    plugins : 'advlist autolink link image lists charmap print preview image code',
                                    // enable title field in the Image dialog
                                    image_title: true,
                                    // enable automatic uploads of images represented by blob or data URIs
                                    automatic_uploads: true,
                                    // add custom filepicker only to Image dialog
                                    file_picker_types: 'image',
                                    file_picker_callback: function(cb, value, meta) {
                                        var input = document.createElement('input');
                                        input.setAttribute('type', 'file');
                                        input.setAttribute('accept', 'image/*');

                                        input.onchange = function() {
                                            var file = this.files[0];
                                            var reader = new FileReader();

                                            reader.onload = function () {
                                                var id = 'blobid' + (new Date()).getTime();
                                                var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                                                var base64 = reader.result.split(',')[1];
                                                var blobInfo = blobCache.create(id, file, base64);
                                                blobCache.add(blobInfo);

                                                // call the callback and populate the Title field with the file name
                                                cb(blobInfo.blobUri(), { title: file.name });
                                            };
                                            reader.readAsDataURL(file);
                                        };

                                        input.click();
                                    }
                                });
                            </script>
                        </div>
                        <div class="form-group">
                            <label for="nameproduct" class="col-form-label">Đường dẫn tới bài viết</label>
                            <hr>
                            <input class="form-control" type="text" value="" name="link">
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
                            <img  alt="" src="" id="profileDisplay" height="250" width="250" > <br/><br/>
                            <input type="file" name="avatar"  onChange="displayImage(this)" id="profileImage" accept="image/*">
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
                            <input class="form-control" type="date" value="<?php echo date("Y-m-d") ?>" id="example-date-input" name="eventDate">
                            <br/> <br/>
                            <button type="submit" class="btn btn-primary" name="submit" >Đăng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team member area end -->
    </form>
</div>
</div>
<!-- main content area end -->