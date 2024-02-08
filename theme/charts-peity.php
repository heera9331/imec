<?php include 'layouts/header.php'; ?>

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
                                    <li class="breadcrumb-item active">Peity Charts</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Peity Charts</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title m-b-30">Line Chart</h4>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="p-4">
                                            <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(103,168,228,0.3)"],"stroke": ["rgba(103,168,228,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="p-4">
                                            <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(74,193,142,0.3)"],"stroke": ["rgba(74,193,142,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="p-4">
                                            <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(232, 65, 38,0.3)"],"stroke": ["rgba(232, 65, 38,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="p-4">
                                            <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(126, 98, 88,0.3)"],"stroke": ["rgba(126, 98, 88,0.8)"]}' data-height="60">3,5,5,2,8,2,5,3,8,9,4,2,5,6,4,5,3,7,6,1</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title m-b-30">Bar Chart</h4>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="p-4">
                                            <span class="peity-bar" data-peity='{ "fill": ["#8d6e63", "#67a8e4"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="p-4">
                                            <span class="peity-bar" data-peity='{ "fill": ["#f06292", "#f2f2f2"]}' data-width="100%" data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="p-4">
                                            <span class="peity-bar" data-peity='{ "fill": ["#fb8c00", "#009688"]}' data-width="100%" data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="p-4">
                                            <span class="peity-bar" data-peity='{ "fill": ["#3bc3e9", "#4ac18e"]}' data-width="100%" data-height="60">3,5,5,2,8,2,5,3,8,9,4,2,5,6,4,5,3,7,6,1</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title m-b-30">Pie Chart</h4>

                                <div class="row text-center">
                                    <div class="col-lg-2 col-md-6 m-b-20">
                                        <span class="peity-pie" data-peity='{ "fill": ["#f06292", "#f2f2f2"]}' data-width="60" data-height="60">2/8</span>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-20">
                                        <span class="peity-pie" data-peity='{ "fill": ["#6d60b0", "#f2f2f2"]}' data-width="60" data-height="60">120/360</span>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-20">
                                        <span class="peity-pie" data-peity='{ "fill": ["#afb42b", "#f2f2f2"]}' data-width="60" data-height="60">1.52/1.561</span>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-20">
                                        <span class="peity-pie" data-peity='{ "fill": ["#009688", "#f2f2f2"]}' data-width="60" data-height="60">1,4</span>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-20">
                                        <span class="peity-pie" data-peity='{ "fill": ["#5468da", "#f2f2f2"]}' data-width="60" data-height="60">226,134</span>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <span class="peity-pie" data-peity='{ "fill": ["#8d6e63", "#f2f2f2"]}' data-width="60" data-height="60">0.52,1.041</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title m-b-30">Donut Chart</h4>

                                <div class="row text-center">
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <span class="peity-donut" data-peity='{ "fill": ["#707070", "#f2f2f2"]}' data-width="60" data-height="60">1/5</span>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <span class="peity-donut" data-peity='{ "fill": ["#ea553d", "#f2f2f2"]}' data-width="60" data-height="60">226/360</span>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <span class="peity-donut" data-peity='{ "fill": ["#ffbb44", "#f2f2f2"], "innerRadius": 16, "radius": 32 }' data-width="60" data-height="60">0.52/1.561</span>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <span class="peity-donut" data-peity='{ "fill": ["#3bc3e9", "#f2f2f2"], "innerRadius": 20, "radius": 32 }' data-width="60" data-height="60">1,4</span>
                                    </div>
                                    <div class="col-lg-2 col-md-6 m-b-30">
                                        <span class="peity-donut" data-peity='{ "fill": ["#4ac18e", "#f2f2f2"], "innerRadius": 23, "radius": 32 }' data-width="60" data-height="60">226,134</span>
                                    </div>
                                    <div class="col-lg-2 col-md-6">
                                        <span class="peity-donut" data-peity='{ "fill": ["#1d1e3a", "#f2f2f2"], "innerRadius": 8, "radius": 32 }' data-width="60" data-height="60">0.52,1.041</span>
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

        <!-- Chart JS -->
        <script src="public/assets/plugins/peity-chart/jquery.peity.min.js"></script>
        <script src="public/assets/pages/peity.init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>