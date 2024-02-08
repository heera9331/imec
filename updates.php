
<?php
    include("protect.php");
    include("functions.php");

    $pageSize = 5;
    $page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
    $offset = ($page - 1) * $pageSize;

    // Fetching events
    $query = "SELECT id, event_title, event_desc, venue, event_from, event_to,status, added_on FROM events LIMIT $offset, $pageSize";
    $events = dbqueryresult($query);

    // Total number of items
    $totalItemsResult = $conn->query("SELECT COUNT(*) as total FROM events");
    $totalItems = $totalItemsResult->fetch_assoc()['total'];
    $totalPages = ceil($totalItems / $pageSize);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        <?php echo $siteName; ?>
    </title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="CyberDairy" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css"
        rel="stylesheet" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript"
        charset="utf-8"></script>

    <style>
        .mybtn {
            min-width: 177px;
            margin-bottom: 4px;
        }
    </style>

</head>

<body>
    <?php
        $pageSize = 3;
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($page - 1) * $pageSize;
        ?>

    <?php include("site-header.php"); ?>

    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h3 class='page-title'>Updates</h3>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->


            <!-- profile warnings -->
            <div class="row">
                <?php
                    $id = $_SESSION['userid'];
                    $isCompleted = isStudentProfileCompleted($id);

                    if (!$isCompleted) {
                        echo('<div class="alert alert-danger" role="alert">
                        <strong>Oh snap!</strong> Please update your profile <a href="update-profile.php">Click</a>
                        </div>');
                    }
                ?>
            </div>
   

        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->


    <!-- Footer -->
    <?php
        include("site-footer.php");
    ?>
    <!-- End Footer -->


    <!-- jQuery  -->

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- Required datatable js -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <!--C3 Chart-->
    <script src="plugins/d3/d3.min.js"></script>
    <script src="plugins/c3/c3.min.js"></script>

    <!-- Datatablse init js -->
    <!--
<script src="assets/pages/datatables.init.js"></script>
-->

    
    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>