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
                                    <li class="breadcrumb-item"><a href="#">Maps</a></li>
                                    <li class="breadcrumb-item active">Google Maps</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Google Maps</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Markers</h4>
                                <p class="text-muted m-b-30 font-14">Example of google maps.</p>

                                <div id="gmaps-markers" class="gmaps"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Overlays</h4>
                                <p class="text-muted m-b-30 font-14">Example of google maps.</p>

                                <div id="gmaps-overlay" class="gmaps"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Street View Panoramas</h4>
                                <p class="text-muted m-b-30 font-14">Example of google maps.</p>

                                <div id="panorama" class="gmaps-panaroma"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Map Types</h4>
                                <p class="text-muted m-b-30 font-14">Example of google maps.</p>

                                <div id="gmaps-types" class="gmaps"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>

        <!-- google maps api -->
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>
           <!-- Gmaps file -->
            <script src="public/assets/plugins/gmaps/gmaps.min.js"></script>
            <!-- demo codes -->
            <script src="public/assets/pages/gmaps.js"></script>
            

    </body>
</html>