<?php include 'layouts/header.php'; ?>

        <!-- Alertify css -->
        <link href="public/assets/plugins/alertify/css/alertify.css" rel="stylesheet" type="text/css">

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
                                    <li class="breadcrumb-item active">Alertify</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Alertify</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Examples</h4>
                                <p class="text-muted m-b-30 font-14">Alertify.js is a small library which
                                    provides light-weight, high performance browser dialogs.</p>

                                <div class="row text-center">
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Alert Dialog</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-alert">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Confirm Dialog</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-confirm">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Prompt Dialog</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-prompt">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Custom Labels</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-labels">Click me</button>
                                    </div>

                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Ajax - Multiple Dialog</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-ajax">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Standard Log</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-notification">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Standard Log With HTML</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-notification-html">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Standard Log with callback</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-notification-callback">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Success Log</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-success">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Success Log with callback</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-success-callback">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Error Log</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-error">Click me</button>
                                    </div>
                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Error Log with callback</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-error-callback">Click me</button>
                                    </div>

                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Closing Log On Click</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-click-to-close">Click me</button>
                                    </div>

                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Disable Log On Click</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-disable-click-to-close">Click me</button>
                                    </div>

                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Hide in 10 seconds</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-delay">Click me</button>
                                    </div>

                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Persistent Log</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-forever">Click me</button>
                                    </div>

                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Maximum Number of Log Messages</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-max-log-items">Click me</button>
                                    </div>

                                    <div class="col-lg-3 col-md-4 m-b-30">
                                        <p class="text-muted">Resetting Default Values</p>
                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-reset">Click me</button>
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

        <!-- Alertify js -->
        <script src="public/assets/plugins/alertify/js/alertify.js"></script>
        <script src="public/assets/pages/alertify-init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>