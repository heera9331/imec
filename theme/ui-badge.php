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
                                    <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                    <li class="breadcrumb-item active">Badge</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Badge</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Example</h4>
                                <p class="text-muted m-b-30 font-14">Badges scale to match the size of the
                                    immediate parent element by using relative font sizing and <code
                                            class="highlighter-rouge">em</code> units.</p>

                                <div class="">
                                    <h1>Example heading <span class="badge badge-default">New</span></h1>
                                    <h2>Example heading <span class="badge badge-default">New</span></h2>
                                    <h3>Example heading <span class="badge badge-default">New</span></h3>
                                    <h4>Example heading <span class="badge badge-default">New</span></h4>
                                    <h5>Example heading <span class="badge badge-default">New</span></h5>
                                    <h6>Example heading <span class="badge badge-default">New</span></h6>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Variations</h4>
                                <p class="text-muted m-b-30 font-14">Add any of the below mentioned modifier
                                    classes to change the appearance of a badge.</p>

                                <div>
                                    <span class="badge badge-default">Default</span>
                                    <span class="badge badge-primary">Primary</span>
                                    <span class="badge badge-success">Success</span>
                                    <span class="badge badge-info">Info</span>
                                    <span class="badge badge-warning">Warning</span>
                                    <span class="badge badge-danger">Danger</span>
                                    <span class="badge badge-dark">Dark</span>
                                    <span class="badge badge-pink">Pink</span>
                                    <span class="badge badge-purple">Purple</span>
                                    <span class="badge badge-indigo">Indigo</span>
                                    <span class="badge badge-teal">Teal</span>
                                    <span class="badge badge-lime">Lime</span>
                                    <span class="badge badge-orange">Orange</span>
                                    <span class="badge badge-brown">Brown</span>
                                    <span class="badge badge-blue-grey">Blue Grey</span>
                                </div>

                                <p class="text-muted m-b-30 font-14 m-t-40">Use the <code
                                        class="highlighter-rouge">.badge-pill</code> modifier class to make
                                    badges more rounded (with a larger <code class="highlighter-rouge">border-radius</code>
                                    and additional horizontal <code class="highlighter-rouge">padding</code>).
                                    Useful if you miss the badges from v3.</p>

                                <div>
                                    <span class="badge badge-pill badge-default">Default</span>
                                    <span class="badge badge-pill badge-primary">Primary</span>
                                    <span class="badge badge-pill badge-success">Success</span>
                                    <span class="badge badge-pill badge-info">Info</span>
                                    <span class="badge badge-pill badge-warning">Warning</span>
                                    <span class="badge badge-pill badge-danger">Danger</span>
                                    <span class="badge badge-pill badge-dark">Dark</span>
                                    <span class="badge badge-pill badge-pink">Pink</span>
                                    <span class="badge badge-pill badge-purple">Purple</span>
                                    <span class="badge badge-pill badge-indigo">Indigo</span>
                                    <span class="badge badge-pill badge-teal">Teal</span>
                                    <span class="badge badge-pill badge-lime">Lime</span>
                                    <span class="badge badge-pill badge-orange">Orange</span>
                                    <span class="badge badge-pill badge-brown">Brown</span>
                                    <span class="badge badge-pill badge-blue-grey">Blue Grey</span>
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

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>