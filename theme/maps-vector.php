<?php include 'layouts/header.php'; ?>

<link href="public/assets/plugins/jvectormap/jquery-jvectormap.css" rel="stylesheet">

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
                                    <li class="breadcrumb-item"><a href="#">Admiria</a></li>
                                    <li class="breadcrumb-item active">Starter</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Starter</h4>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">World Map</h4>
                                <p class="text-muted m-b-30 font-14">Example of vector map.</p>

                                <div id="world-map-markers" style="height: 400px"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">USA Map</h4>
                                <p class="text-muted m-b-30 font-14">Example of vector map.</p>

                                <div id="usa" style="height: 400px"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">UK Map</h4>
                                <p class="text-muted m-b-30 font-14">Example of vector map.</p>

                                <div id="uk" style="height: 400px"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Chicago Map</h4>
                                <p class="text-muted m-b-30 font-14">Example of vector map.</p>

                                <div id="chicago" style="height: 400px"></div>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>


          <!-- Jvector Map js -->
          <script src="public/assets/plugins/jvectormap/jquery-jvectormap.js"></script>
        <script src="public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="public/assets/plugins/jvectormap/gdp-data.js"></script>
        <script src="public/assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
        <script src="public/assets/plugins/jvectormap/jquery-jvectormap-uk-mill-en.js"></script>
        <script src="public/assets/plugins/jvectormap/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
        <script src="public/assets/pages/jvectormap.init.js"></script>


        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>