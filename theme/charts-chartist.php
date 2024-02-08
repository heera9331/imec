<?php include 'layouts/header.php'; ?>

<!--Chartist Chart CSS -->
<link rel="stylesheet" href="public/assets/plugins/chartist/css/chartist.min.css">

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
                                    <li class="breadcrumb-item"><a href="#">Charts</a></li>
                                    <li class="breadcrumb-item active">Chartist Chart</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Chartist Chart</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Overlapping bars on mobile</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">86541</h5>
                                        <p class="text-muted font-14">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">2541</h5>
                                        <p class="text-muted font-14">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">102030</h5>
                                        <p class="text-muted font-14">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="overlapping-bars" class="ct-chart ct-golden-section"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Stacked bar chart</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">5241</h5>
                                        <p class="text-muted font-14">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">65411</h5>
                                        <p class="text-muted font-14">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">51654</h5>
                                        <p class="text-muted font-14">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="stacked-bar-chart" class="ct-chart ct-golden-section"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Animating a Donut with Svg.animate</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">748949</h5>
                                        <p class="text-muted font-14">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">5181</h5>
                                        <p class="text-muted font-14">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">101025</h5>
                                        <p class="text-muted font-14">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="animating-donut" class="ct-chart ct-golden-section"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Simple pie chart</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">48484</h5>
                                        <p class="text-muted font-14">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">48652</h5>
                                        <p class="text-muted font-14">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">85412</h5>
                                        <p class="text-muted font-14">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Advanced Smil Animations</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">45410</h5>
                                        <p class="text-muted font-14">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">4442</h5>
                                        <p class="text-muted font-14">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">3201</h5>
                                        <p class="text-muted font-14">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="smil-animations" class="ct-chart ct-golden-section"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Simple line chart</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">44242</h5>
                                        <p class="text-muted font-14">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">75221</h5>
                                        <p class="text-muted font-14">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">65212</h5>
                                        <p class="text-muted font-14">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Line Scatter Diagram</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">5677</h5>
                                        <p class="text-muted font-14">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">5542</h5>
                                        <p class="text-muted font-14">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">12422</h5>
                                        <p class="text-muted font-14">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="scatter-diagram" class="ct-chart ct-golden-section"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Line chart with area</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">4234</h5>
                                        <p class="text-muted font-14">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">64521</h5>
                                        <p class="text-muted font-14">Pending</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">94521</h5>
                                        <p class="text-muted font-14">Deactivated</p>
                                    </li>
                                </ul>

                                <div id="chart-with-area" class="ct-chart ct-golden-section"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>

        <!--Chartist Chart-->
        <script src="public/assets/plugins/chartist/js/chartist.min.js"></script>
        <script src="public/assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
        <script src="public/assets/pages/chartist.init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>