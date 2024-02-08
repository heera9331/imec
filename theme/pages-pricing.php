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
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">Pricing</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Pricing</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row text-center">
                    <div class="col-lg-3">
                        <div class="card plan-card mt-4">
                            <div class="card-body">
                                <div class="pt-3 pb-3">
                                    <h1><i class="ion-plane plan-icon"></i></h1>
                                    <h6 class="text-uppercase text-primary">Starter Pack</h6>
                                </div>
                                <div>
                                    <h1 class="plan-price padding-b-15">$19<span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
                                    <div class="plan-div-border"></div>
                                </div>
                                <div class="plan-features pb-3 mt-3 text-muted padding-t-b-30">
                                    <p>Free Live Support</p>
                                    <p>Unlimited User</p>
                                    <p>No Time Tracking</p>
                                    <p>Free Setup</p>
                                    <a href="#" class="btn btn-primary">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card plan-card mt-4">
                            <div class="card-body">
                                <div class="pt-3 pb-3">
                                    <h1><i class="ion-trophy plan-icon bg-dark"></i></h1>
                                    <h6 class="text-uppercase text-dark">Professional Pack</h6>
                                </div>
                                <div>
                                    <h1 class="plan-price padding-b-15">$29<span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
                                    <div class="plan-div-border"></div>
                                </div>
                                <div class="plan-features pb-3 mt-3 text-muted padding-t-b-30">
                                    <p>Free Live Support</p>
                                    <p>Unlimited User</p>
                                    <p>No Time Tracking</p>
                                    <p>Free Setup</p>
                                    <a href="#" class="btn btn-dark">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card plan-card mt-4">
                            <div class="card-body">
                                <div class="pt-3 pb-3">
                                    <h1><i class="ion-umbrella plan-icon bg-pink"></i></h1>
                                    <h6 class="text-uppercase text-pink">Enterprise Pack</h6>
                                </div>
                                <div>
                                    <h1 class="plan-price padding-b-15">$39<span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
                                    <div class="plan-div-border"></div>
                                </div>
                                <div class="plan-features pb-3 mt-3 text-muted padding-t-b-30">
                                    <p>Free Live Support</p>
                                    <p>Unlimited User</p>
                                    <p>No Time Tracking</p>
                                    <p>Free Setup</p>
                                    <a href="#" class="btn btn-pink">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card plan-card mt-4">
                            <div class="card-body">
                                <div class="pt-3 pb-3">
                                    <h1><i class="ion-cube plan-icon bg-teal"></i></h1>
                                    <h6 class="text-uppercase text-teal">Unlimited Pack</h6>
                                </div>
                                <div>
                                    <h1 class="plan-price padding-b-15">$49<span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
                                    <div class="plan-div-border"></div>
                                </div>
                                <div class="plan-features pb-3 mt-3 text-muted padding-t-b-30">
                                    <p>Free Live Support</p>
                                    <p>Unlimited User</p>
                                    <p>No Time Tracking</p>
                                    <p>Free Setup</p>
                                    <a href="#" class="btn btn-teal">Sign Up Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>