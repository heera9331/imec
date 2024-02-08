<?php include 'layouts/header.php'; ?>

        <!-- Select 2 -->
        <link href="public/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <?php include 'layouts/headerStyle.php'; ?>

    <body>

    <?php include 'layouts/loader.php'; ?>

    <?php include 'layouts/navbar.php'; ?>

        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Product Edit</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Product Edit</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Basic Information</h4>
                                <p class="text-muted m-b-30 font-14">Fill all information below</p>

                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="productname">Product Name</label>
                                                <input id="productname" name="productname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="manufacturername">Manufacturer Name</label>
                                                <input id="manufacturername" name="manufacturername" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="productdesc">Product Description</label>
                                                <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="manufacturerbrand">Manufacturer Brand</label>
                                                <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input id="price" name="price" type="text" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Category</label>
                                                <select class="form-control select2">
                                                    <option>Select</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Features</label>

                                                <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Product Image</label> <br/>
                                                <img src="public/assets/images/products/1.jpg" alt="product img" class="img-fluid" style="max-width: 200px;" />
                                                <br/>
                                                <button type="button" class="btn btn-purple m-t-10 waves-effect waves-light">Change Image</button>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                    <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>
                                </form>

                            </div>
                        </div>

                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Meta Data</h4>
                                <p class="text-muted m-b-30 font-14">Fill all information below</p>

                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="metatitle">Meta title</label>
                                                <input id="metatitle" name="productname" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="metakeywords">Meta Keywords</label>
                                                <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="metadescription">Meta Description</label>
                                                <textarea class="form-control" id="metadescription" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success waves-effect waves-light">Save Changes</button>
                                    <button type="submit" class="btn btn-secondary waves-effect">Cancel</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>

        <!-- select2 js -->
        <script src="public/assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            // Select2
            $(".select2").select2();
        </script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>