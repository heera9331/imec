
<?php
    include("protect.php");
    include("functions.php");

    $pageSize = 5;
    $page = isset($_GET['page']) ? max(1, (int)$_GET['page']) : 1;
    $offset = ($page - 1) * $pageSize;

    // Fetching jobs
    $query = "SELECT id,title, c_id, descp, skills, `to`, `from`, status, location FROM jobs LIMIT $offset, $pageSize";

    $jobs = dbqueryresult($query);

    // Total number of items
    $totalItemsResult = $conn->query("SELECT COUNT(*) as total FROM jobs");
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
                        <h3 class='page-title'>Jobs</h3>
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
 

            <!-- saerch form -->
            <form action="jobs.php" method="GET" class="w-100 py-4 m-auto">
                <div class="mb-2 p-2 flex align-items-center justify-content-center gap-2 m-auto">
                    <label for="query">
                    <h4>Search jobs</h4>
                    </label>
                    <input name="query" type="search" placeholder="jobs search here..." class="w-75 bg-white shadow-sm rounded-sm p-2 mx-2" style="border: none;"/>

                    <!-- filters -->
                    <!-- <div class="form-controls">
                    <input type="checkbox" name="active" id="" class="m-1">
                    <label for="active">
                        On Going Event
                    </label>
                    </div>
                    <div class="form-controls d-flex justify-content-center align-items-center">
                        <input type="checkbox" name="completed" id="" class="m-1">
                        <label for="completed">
                            Complated
                        </label>
                    </div> -->

                    <button type="search" name="search" class="btn btn-primary">
                        Search
                    </button>
                </div>
                
            </form>
            
            <!-- search reasult will we appeared here -->
            <div class="container d-flex flex-wrap justify-content-start w-100">
                
                <?php
                    if(isset($_GET['search'])) {
                        $query = $_GET['query'];
                        $query = "SELECT id,title, c_id, descp, skills, `to`, `from`, status, location FROM jobs WHERE title='$query' LIMIT $pageSize";
                        
                        $jobs = dbqueryresult($query);
                        
                        "Search result = \"$query\"";
                    } 

                    else if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $query = "SELECT id,title, c_id, descp, skills, `to`, `from`, status, location FROM jobs WHERE id='$id' LIMIT $pageSize";
                        $jobs = dbqueryresult($query);
                        
                    }
                ?>
            </div>
                
            <!-- event are listed here -->
            <div class="container d-flex flex-wrap justify-content-start w-100">
                <?php
                    if (count($jobs) > 0) {
                        // active
                        // adding company into jobs array, using id
                        
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
                            
                            // student on single job, show the apply button else view button
                            // student on single job, show the apply button else view button
                            if(isset($_GET["id"])) {    
                                // student interested only in active event/job otherwise only can view the event/job
                                if($job['status'] == 1) {
                                    $s_id = $_SESSION['userid']; // student id
                                    $type = 1; // type id 0=> event, 1=> job 
                                    $t_id = $_GET['id'];  // type id , job/event id
                                    $query = "SELECT count(*) as cnt from student_interests where s_id=$s_id AND type=$type AND t_id=$t_id limit 1";

                                    // already register or interested
                                    // print_r(containsInterest($query));
                                    if(containsInterest($query)) {
                                        echo '<button class="btn btn-primary"> Applied </button>'; 
                                    } else {
                                        echo '<form method="POST" action=?id='.$job['id'].' class="link active">
                                        <button class="btn btn-primary" type="submit" name="interested"> I am Interested </button>
                                        </form>';
                                    } 
                                } else {
                                    echo '<div >
                                    <button class="btn btn-primary link "> Expired </button>
                                    </div>';
                                }
                            }
                            else {
                                echo '<a href=jobs.php?id='.$job['id'].' class="link active">View</a>';
                            }
                            echo '</div>';  
                            echo '</div>';
                            echo '</div>';
                        
                        }
                    } else {
                        echo "No Jobs available here";
                    }
                ?>
 
            </div>

            <?php  
                if(isset($_POST['interested'])) {
                    $s_id = $_SESSION['userid']; // student id
                    $type = 1; // type id 0=> event, 1=> job 
                    $t_id = $_GET['id'];  // type id , job/event id
                    $query = "SELECT count(*) as cnt from student_interests where s_id=$s_id AND type=$type AND t_id=$t_id";
                    if(containsInterest($query)) {
                        echo '<script type="text/javascript">
                            alert("You are already registered");
                        </script>'; 
                    } else {
                        $query = "INSERT INTO student_interests (s_id, type, t_id) VALUES ($s_id, $type, $t_id);";
                        $res = dbquery($query);  
                        echo '<script type="text/javascript">
                            alert("Successfully registered for job");
                        </script>'; 
                    }  
                }
                
            ?>


            <!-- Pagination buttons -->
            <div class="m-auto w-100 d-flex justify-content-center align-items-center gap-2 py-4">
                <!-- <button class="btn btn-primary mx-1" disabled="<?= $page == 1 ? 'true' : 'false' ?>"> << </button> -->
                <a href="?page=<?= max($page - 1, 1) ?>" class="btn btn-primary mx-1" <?= $page == 1 ? 'disabled' : '' ?>> < </a>

                <button class="btn btn-primary mx-1">
                    <?= $page . '/' . ceil($totalPages) ?>
                </button>

                <a href="?page=<?= min($page + 1, $totalPages) ?>" class="btn btn-primary mx-1" <?= $page == $totalPages ? 'disabled' : '' ?>> > </a>
                <!-- <button class="btn btn-primary mx-1" disabled="<?= $page == $totalPages ? 'true' : 'false' ?>"> >> </button> -->
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

    
    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>