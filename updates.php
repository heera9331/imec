<?php
include("protect.php");
include("functions.php");

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
                echo(' <div class="alert alert-danger" role="alert">
                            <strong>Oh snap!</strong> Please update your profile <a href="update-profile.php">Click</a>
                        </div>');
            }
            ?>
            </div>


        </div> <!-- end container -->
    </div>
    <!-- end wrapper -->


    <!-- updates like shorting for job/internship -->
    <div class="d-flex mx-4">
        <div class="row">
            <div class="card-body bg-light shadow-sm rounded-md m-3">
                <h4 class="mt-0 header-title">Events</h4>

                <table class="table table-striped">
                    <thead class="bg-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                // type event = 0
                // printing event status
                // sno, title, status, date, view
                $userid = $_SESSION['userid'];
                $query = "
            SELECT EVENTS.ID, EVENTS.event_title, events.event_from,student_interests.status  
            FROM student_interests 
            JOIN events ON events.id = t_id
            WHERE TYPE=0 AND s_id=$userid LIMIT 20;";

                $events = dbqueryresult($query);
                //            print_r($events);
                $cnt = 1;
                if ($events) {
                    foreach ($events as $event) {
                        echo "<tr>";
                        echo "    <th scope='row'>$cnt</th>";
                        echo "    <td>" . $event['event_title'] . "</td>";
                        echo "    <td>" . $event['event_from'] . "</td>";

                        if ($event['status'] == 0) {
                            // pending
                            echo "<td>" . "Pending" . "</td>";
                        } else if ($event['status'] == 1) {
                            // short listed
                            echo "<td>" . "Eligible" . "</td>";
                        } else {
                            // rejected
                            echo "<td>" . "Rejected" . "</td>";
                        }
                        echo "<td>";
                        $id = $event['ID'];
                        echo "<a href='events.php?id=$id'>";
                        echo "View</a></td>";
                        echo "</tr>";
                        $cnt++;
                    }
                }
                ?>

                    </tbody>
                </table>

            </div>
            <div class="card-body bg-light shadow-sm rounded-md m-3">
                <h4 class="mt-0 header-title">Jobs</h4>

                <table class="table table-striped">
                    <thead class="bg-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php
                // type job = 1
                // printing job status
                // sno, title, status, date, view
                $userid = $_SESSION['userid'];
                $query = "
                SELECT EVENTS.ID, EVENTS.event_title, events.event_from,student_interests.status  
                FROM student_interests 
                JOIN events ON events.id = t_id
                WHERE TYPE=1 AND s_id=$userid LIMIT 20;";

                $jobs = dbqueryresult($query);
                //            print_r($events);
                $cnt = 1;
                if ($jobs) {
                    foreach ($jobs as $job) {
                        echo "<tr>";
                        echo "    <th scope='row'>$cnt</th>";
                        echo "    <td>" . $job['event_title'] . "</td>";
                        echo "    <td>" . $job['event_from'] . "</td>";

                        if ($job['status'] == 0) {
                            // pending
                            echo "<td>" . "Pending" . "</td>";
                        } else if ($job['status'] == 1) {
                            // short listed
                            echo "<td>" . "Eligible" . "</td>";
                        } else {
                            // rejected
                            echo "<td>" . "Rejected" . "</td>";
                        }
                        echo "<td>";
                        $id = $job['ID'];
                        echo "<a href='jobs.php?id=$id'>";
                        echo "View</a></td>";
                        echo "</tr>";
                        $cnt++;
                    }
                }
                ?>

                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <!-- events updates -->
    <!-- notice etc -->

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