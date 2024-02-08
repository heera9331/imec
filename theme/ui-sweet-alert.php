<?php include 'layouts/header.php'; ?>

        <!-- Sweet Alert -->
        <link href="public/assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

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
                                    <li class="breadcrumb-item active">Sweet Alert</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Sweet Alert</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Examples</h4>
                                <p class="text-muted m-b-30 font-14">A beautiful, responsive, customizable
                                    and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero
                                    dependencies.</p>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">A basic message</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-basic">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">A title with a text under</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-title">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">A success message!</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-success">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">A warning message, with a function attached to the "Confirm"-button...</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Click me</button>
                                    </div>

                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">By passing a parameter, you can execute something else for "Cancel".</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-params">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">A message with custom Image Header</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-image">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">A message with auto close timer</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-close">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Custom HTML description and buttons</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-html-alert">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">A message with custom width, padding and background</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="custom-padding-width-alert">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Ajax request example</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="ajax-alert">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Chaining modals (queue) example</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="chaining-alert">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Dynamic queue example</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="dynamic-alert">Click me</button>
                                    </div>

                                </div> <!-- end row -->

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>
        
        <!-- Sweet-Alert  -->
        <script src="public/assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
        <script src="public/assets/pages/sweet-alert.init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>