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
        // number of event show at a time 
        $pageSize = 2;
        $page = 1;
    ?>
    <!-- Loader -->
    <!-- <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div> -->

    <!-- Navigation Bar-->
    <?php
    include("site-header.php");
    ?>
    <!-- End Navigation Bar-->


    <div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h3 class='page-title'>IMEC Campus Pulse</h3>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->


            <!-- profile completion warnings -->
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

            <!-- other information -->

            </div> 
                <!-- event are listed here -->
                <div>
                    <h5>Upcoming events</h3>
                </div>  
                <div class="container d-flex flex-wrap justify-content-start w-100">
                    <?php 
                        $query = "SELECT id, event_title, event_desc, event_from, event_to, added_on FROM events LIMIT 5";
                        
                        $events = dbqueryresult($query);
                        // print_r($events);
                    ?>

                    <?php
                    if ($events) {
                        
                        // active
                        foreach ($events as $event) { 
                             
                            echo '<div class="card border border-1 m-1 shadow-sm" style="width: 350px;">';
                            echo '<h5 class="card-header mt-0">'.$event['event_title'].'</h5>';
                            echo '<div class="d-flex">';
                            echo '<div class="card-body m-1">';
                            echo '<p class="card-text">'.$event['event_desc'].'</p>';
                            echo '<a href=events.php?id='.$event['id'].' class="link active">View</a>';
                            echo '</div>';  
                            echo '</div>';
                            echo '</div>';
                        
                        }
                    }
                ?>
                </div>
                <div class="d-flex justify-content-center align-items-center my-4">   
                    <a href="events.php">
                        <button class="btn btn-primary">View More</button>
                    </a>
                </div>
                <!-- event are listed here -->
                <div>
                    <h5>Jobs</h3>
                </div> 

                <div class="container d-flex flex-wrap justify-content-start w-100">
                    <?php 
                         $query = "SELECT id,title, c_id, descp, skills, `to`, `from`, status, location FROM jobs LIMIT 5"; 
                        $jobs = dbqueryresult($query);
                        // print_r($events);
                    ?>

                    <?php
                    if ($jobs) {
                        
                        // active
                        foreach ($jobs as $job) { 
                             
                            $id = $job["c_id"];
                            $query = "SELECT name FROM `companies` WHERE id=$id;";
                            $res = dbqueryresult($query);
                            $job["company"] = $res[0]["name"];
                            
                            echo '<div class="card border border-1 m-1 shadow-sm" style="width: 350px;">';
                            echo '<h5 class="card-header mt-0">'.$job['title'].'</h5>';
                            echo '<div class="d-flex">';
                            echo '<div class="card-body m-1">';
                            echo '<p class="card-text">'.$job['descp'].' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam incidunt, numquam ad dolor fugiat ipsum inventore. Deleniti, modi voluptatibus?</p>';
                            echo '<p class="card-text"><b>Company</b> - '.$job['company'].'</p>';
                            echo '<p class="card-text"><b>Location</b> - '.$job['location'].'</p>';
                            echo '<p class="card-text"><b>Date</b> - From '.$job['to'].' To '.$job['from'].'</p>';
                            echo '<p class="card-text"><b>Skills</b> - '.$job['skills'].'</p>';
                            echo '</div>';  
                            echo '</div>';
                            echo '</div>';
                        
                        }
                    }
                ?>
                </div>
                <div class="d-flex justify-content-center align-items-center my-4">   
                    <a href="jobs.php">
                        <button class="btn btn-primary">View More</button>
                    </a>
                </div>
            
            
            </div>
            
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

    <script>
        $(document).ready(function () {
            $('#datatable').DataTable({
                "ordering": false
            });
        });

        $(document).ready(function () {
            $("#getinfo").click(function () {
                var q = $("#q").val();
                if (q != "") {
                    //alert(sn);
                    $.ajax({
                        url: "fetch-information.php?q=" + q, success: function (result) {
                            $("#cust_info").html(result);
                        }
                    });
                } else {
                    return false;
                }
            });
        });

        $(document).ready(function () {
            $("#getform").click(function () {
                $("#mylightbox").css("block");
            });
        });
    </script>
    <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>