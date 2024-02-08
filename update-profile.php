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
        <title><?php echo $siteName; ?></title>
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
        
        <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
        <script src="assets/js/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    
    
        <style>
            .mybtn{
                min-width:177px;
                margin-bottom:4px;
            }
        </style>    
    </head>


    <body>
        
        
        <!-- Loader -->
        <!-- <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->

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
							    <h4 class = 'page-title'>IMEC Campus Pulse</h3>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
 
              
                    <?php  
                        
                    ?> 
                     

                <div class="container">
                    
                    <?php 
                        $student = getStudent($_SESSION['userid']);
                         
                        // print_r($student);
        
                        if(isset($_POST["submit"])) {  
                            // we update student using enrollment
                            $enrollment = $_SESSION['enrollment'];
                            $fullname = $_POST['fullname'];
                            $mobile = $_POST['mobile'];
                            $dob = $_POST['dob'];
                            $father = $_POST['father'];
                            $mother = $_POST['mother'];
                            $emailid = $_POST['emailid'];
                            $whatsappno = $_POST['whatsappno'];
                            $linkedinid = $_POST['linkedinid'];
                            $address = $_POST['address'];
                            $course = $_POST['course']; 
                            $branch = $_POST['branch'];
                            
                            try {
                                $res = updateStudent($enrollment, $fullname, $mobile, $dob
                                , $father, $mother, $emailid, $whatsappno, $linkedinid, $address, $course, $branch);
                                 
                                
                                if(!$res) {
                                    echo '<script type="text/javascript">';
                                    echo 'alert("something went wrong");';
                                    echo '</script>';
                                } else {
                                    echo '<script type="text/javascript">';
                                    echo 'alert("Success");';
                                    echo '</script>';

                                    redirect('index.php');
                                }
                            } catch (\Throwable $th) {
                                //throw $th;
                                echo '<script type="text/javascript">';
                                echo 'alert("something went wrong");';
                                echo '</script>';
                            }
                        }
                    ?> 
                </div>
                <div class="container mt-5">
                    <form action="update-profile.php" method="POST">
                        <div class="form-group">
                            <label for="fullname">Full Name:</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" value=<?php echo $student['fullname']?>>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile:</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" value=<?php echo $student['mobile']?>>
                        </div>
                          
                        <div class="form-group">
                            <label for="dob">Date of Birth:</label>
                            <input type="text" class="form-control" id="dob" name="dob" value=<?php echo $student['dob']?>>
                        </div>
                        <div class="form-group">
                            <label for="father">Father's Name:</label>
                            <input type="text" class="form-control" id="father" name="father" value=<?php echo $student['father']?>>
                        </div>
                        <div class="form-group">
                            <label for="mother">Mother's Name:</label>
                            <input type="text" class="form-control" id="mother" name="mother" value=<?php echo $student['mother']?>>
                        </div>
                        <div class="form-group">
                            <label for="emailid">Email ID:</label>
                            <input type="email" class="form-control" id="emailid" name="emailid" value=<?php echo $student['emailid']?>>
                        </div>
                        <div class="form-group">
                            <label for="whatsappno">WhatsApp Number:</label>
                            <input type="text" class="form-control" id="whatsappno" name="whatsappno" value=<?php echo $student['whatsappno']?>>
                        </div>
                        <div class="form-group">
                            <label for="linkedinid">LinkedIn ID:</label>
                            <input type="text" class="form-control" id="linkedinid" name="linkedinid" value=<?php echo $student['linkedinid']?>>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" value=<?php echo $student['address']?>>
                        </div>
                         
                        
                        <div class="form-group">
                            <label for="course">Course:</label>
                            <input type="text" class="form-control" id="course" name="course" value=<?php echo $student['course']?>>
                        </div>
                        <div class="form-group">
                            <label for="branch">Branch:</label>
                            <input type="text" class="form-control" id="branch" name="branch" value=<?php echo $student['branch']?>>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn bg-primary" name="submit">
                                Update
                            </button>
                        </div>
                    </form>
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
            $(document).ready(function(){
            jQuery('#dob').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose: true,
                    todayHighlight: true
                });
            
            jQuery('#dob').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose: true,
                    todayHighlight: true
                }); 
            }); 
            </script>
  
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    </body>
</html>