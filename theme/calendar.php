<?php include 'layouts/header.php'; ?>

<!--calendar css-->
<link href="public/assets/plugins/fullcalendar/css/fullcalendar.min.css" rel="stylesheet" />

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
                                    <li class="breadcrumb-item active">Calendar</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Calendar</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <div id='calendar'></div>

                                <div style='clear:both'></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

   <?php include 'layouts/footer.php'; ?>


   <?php include 'layouts/footerScript.php'; ?>
        <!-- Jquery-Ui -->
        <script src="public/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="public/assets/plugins/moment/moment.js"></script>
        <script src='public/assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
        <script src="public/assets/pages/calendar-init.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>