<?php include 'layouts/header.php'; ?>

        <!-- Nestable css -->
        <link href="public/assets/plugins/nestable/jquery.nestable.css" rel="stylesheet" />

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
                                    <li class="breadcrumb-item active">Nestable List</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Nestable List</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">List 1</h4>
                                <p class="text-muted m-b-30 font-14">Drag & drop hierarchical list with
                                    mouse and touch compatibility (jQuery plugin).</p>

                                <div class="custom-dd dd" id="nestable_list_1">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="1">
                                            <div class="dd-handle">
                                                Item 1
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="2">
                                            <div class="dd-handle">
                                                Item 2
                                            </div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="3">
                                                    <div class="dd-handle">
                                                        Item 3
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="4">
                                                    <div class="dd-handle">
                                                        Item 4
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="5">
                                                    <div class="dd-handle">
                                                        Item 5
                                                    </div>
                                                    <ol class="dd-list">
                                                        <li class="dd-item" data-id="6">
                                                            <div class="dd-handle">
                                                                Item 6
                                                            </div>
                                                        </li>
                                                        <li class="dd-item" data-id="7">
                                                            <div class="dd-handle">
                                                                Item 7
                                                            </div>
                                                        </li>
                                                        <li class="dd-item" data-id="8">
                                                            <div class="dd-handle">
                                                                Item 8
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </li>
                                                <li class="dd-item" data-id="9">
                                                    <div class="dd-handle">
                                                        Item 9
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="10">
                                                    <div class="dd-handle">
                                                        Item 10
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>

                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">List 2</h4>
                                <p class="text-muted m-b-30 font-14">Drag & drop hierarchical list with
                                    mouse and touch compatibility (jQuery plugin).</p>

                                <div class="custom-dd dd" id="nestable_list_2">
                                    <ol class="dd-list">
                                        <li class="dd-item" data-id="11">
                                            <div class="dd-handle">
                                                Item 11
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="12">
                                            <div class="dd-handle">
                                                Item 12
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="13">
                                            <div class="dd-handle">
                                                Item 13
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="14">
                                            <div class="dd-handle">
                                                Item 14
                                            </div>
                                        </li>
                                        <li class="dd-item" data-id="15">
                                            <div class="dd-handle">
                                                Item 15
                                            </div>
                                            <ol class="dd-list">
                                                <li class="dd-item" data-id="16">
                                                    <div class="dd-handle">
                                                        Item 16
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="17">
                                                    <div class="dd-handle">
                                                        Item 17
                                                    </div>
                                                </li>
                                                <li class="dd-item" data-id="18">
                                                    <div class="dd-handle">
                                                        Item 18
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
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

        <!--script for this page only-->
        <script src="public/assets/plugins/nestable/jquery.nestable.js"></script>
        <script src="public/assets/pages/nestable-init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>