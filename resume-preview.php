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

     

</head>
<body>
     
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
                        <h3 class='page-title'>Profile Preview</h3>
                    </div>
                </div>
            </div> 
        </div>

        <div class="container-fluid bg-light py-4">
            
            <!-- profile section -->
            <?php
            $query = "SELECT * FROM student_info;";
            $res = dbqueryresult($query); 
            
            if(count($res)>0) {
                $res = $res[0];
            }

            if(count($res)>0) {
                echo '<h4>Personal Information</h4>';
                echo '<div class="border p-3 my-2" style="1px solid black;">';
                
                echo '<p>Full Name - '.$res['FirstName'].' '.$res['LastName']  .'</p>';
                echo '<p>Email - '.$res['Email']  .'</p>';
                echo '<p>Phone - '.$res['Phone']  .'</p>';
                echo '<p>Address - '.$res['Address']  .'</p>'; 
                echo '</div>';
            }
            ?>

            <!-- education section -->
            <?php
            $studentid = $_SESSION['userid'];
            $query = "SELECT * FROM education WHERE studentid=$studentid";
            $result = dbqueryresult($query);
              
            echo '<h4>Education</h4>';
            foreach ($result as $res) {
                
                echo '<div class="border p-3 my-2" style="1px solid black;">';
                echo '<p>Degree - '.$res['degree'].'</p>';
                echo '<p>Major - '.$res['major']  .'</p>';
                echo '<p>Intitution - '.$res['institution']  .'</p>';
                echo '<p>Date - '.$res['startdate'].' to '.$res['enddate']  .'</p>'; 
                echo '<p>Intitution - '.$res['marks']  .'</p>';
                echo '</div>';
            }
            ?>
 
            <!-- skills section -->
            <?php
            $studentid = $_SESSION['userid'];
            $query = "SELECT * FROM skills WHERE studentid=$studentid;";
            $res = dbqueryresult($query); 
            
            echo '<h4>Skills</h4>';
            // print_r($res);
            echo '<ul class="border p-3 my-2" style="1px solid black;">';
            foreach ($res as $skill) {
                echo '<li>'.$skill['skill'].' - '.$skill['level'].'</li>';
            }
            echo '</ul>';
            ?>


            <!-- work experience section -->
            <?php
            $studentid = $_SESSION['userid'];
            $query = "SELECT * FROM work_experience WHERE studentid=$studentid";
            $result = dbqueryresult($query);
        
            echo '<h4>Work Experience</h4>';
            foreach ($result as $res) { 
                echo '<div class="border p-3 my-2" style="1px solid black;">';
                echo '<p>Company - '.$res['company'].'</p>';
                echo '<p>Position - '.$res['position']  .'</p>';
                echo '<p>Description     - '.$res['description']  .'</p>';
                echo '<p>Years - '.$res['years']  .'</p>';
                echo '<p>Date - '.$res['startdate'].' to '.$res['enddate']  .'</p>'; 
                echo '</div>';
            }
            ?>
        </div>

        
    <div>


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