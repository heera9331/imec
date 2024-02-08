<?php include 'layouts/header.php'; ?>

        <!-- ION Slider -->
        <link href="public/assets/plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>

        
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
                                    <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                    <li class="breadcrumb-item active">Range Slider</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Range Slider</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">ION Range slider</h4>
                                <p class="text-muted m-b-30 font-14">Cool, comfortable, responsive and easily customizable range slider</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Default</h5>
                                            <input type="text" id="range_01">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Min-Max</h5>
                                            <input type="text" id="range_02">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Prefix</h5>
                                            <input type="text" id="range_03">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Range</h5>
                                            <input type="text" id="range_04">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Step</h5>
                                            <input type="text" id="range_05">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Custom Values</h5>
                                            <input type="text" id="range_06">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Prettify Numbers</h5>
                                            <input type="text" id="range_07">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Disabled</h5>
                                            <input type="text" id="range_08">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Extra Example</h5>
                                            <input type="text" id="range_09">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Use decorate_both option</h5>
                                            <input type="text" id="range_10">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Postfixes</h5>
                                            <input type="text" id="range_11">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="p-3">
                                            <h5 class="font-16 m-b-20 mt-0">Hide</h5>
                                            <input type="text" id="range_12">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>

        <script src="public/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="public/assets/pages/rangeslider-init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>