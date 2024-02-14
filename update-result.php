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
 
               
                     

                
                <div class="container mt-5">

                    
                    <div class="card-body bg-light rounded-sm p-4 my-2">

                        <h4 class="mt-0 header-title">Result</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Semester</th>
                                        <th>Marks</th>
                                        <th>Result</th>
                                        <th>Remark</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                                                
                                    <!-- already filled result -->
                                    <?php
                                        $studentid = $_SESSION['userid'];
                                        $sql = "select * from student_academics where studentid=$studentid order by semester asc;";
                                        $result = dbqueryresult($sql);
                                        //print_r('already result');
                                        //print_r($result);
                                    ?>
                                    <?php 
                                    $idx = 1;
                                    foreach($result as $res) {
                                        echo '<tr>'; // Start a new table row for each record
                                        echo '<td>'.$idx.'</td>';
                                        echo '<td>'.$res["semester"].'</td>';
                                        echo '<td>'.$res["marks"].'</td>';
                                        echo '<td>'.$res["result"].'</td>';
                                        echo '<td>'.$res["remark"].'</td>';
                                        echo '</tr>'; // Close the table row
                                        $idx++; // Increment index for the next iteration
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                    <form action="update-result.php" method="POST">
                        
                    <?php
                        // show branch and semesters according to course id=> which is inserted by student while completing the profile
                        $studentid = $_SESSION['userid'];
                        $sql = "select course_name,course_semester from courses where id = (select course from students where id = $studentid);";
                        $result = dbqueryresult($sql);
                        if(count($result))
                            $result = $result[0];
                        //print_r($result);
                    ?>
                        <div class="form-group">
                            <label for="course">Course:</label>
                            <input readonly type="text" class="form-control" id="course" name="course" value=<?php echo $result['course_name']?>>
                        </div>
                        
                        <div class="form-group d-flex">
                            <div class="inline m-0">
                            <label for="semester">Semester</label>
                            <select name="semester" id="semester">
                                <?php 
                                    for($i=1; $i<=$result['course_semester']; $i++) {
                                        echo "<option value='$i'>$i</option>";
                                    }
                                ?>

                            </select>
                            </div>
                            <div class="inline mx-2">
                            <label for="result">Result</label>
                            <select name="result" id="result">
                                <option value="passed">passed</option>
                                <option value="atkt">atkt</option>
                            </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="marks">Marks:</label>
                            <input type="text" class="form-control" id="marks" name="marks" placeholder="Enter your marks %">
                        </div>
                        <div class="form-group">
                            
                            
                        </div>
                        <div class="form-group">
                            <label for="remark">Remarks:</label>
                            <input type="text" class="form-control" id="remark" name="remark" placeholder="Remark">
                        </div>    
                        <div class="form-group">
                            <button type="submit" class="btn bg-primary" name="submit">
                                Save
                            </button>


                            <?php 
                                if(isset($_POST['submit'])) {
                                    $studentid = $_SESSION['userid'];
                                    $semester = $_POST['semester'];
                                    $marks = $_POST['marks'];
                                    $result = $_POST['result'];
                                    $remark = $_POST['remark'];
                                    
                                    // if already have result than update else insert
                                    // if any value is missing than show missing fields except remark
                                    $res = hasResult($studentid, $semester);
                                    print_r($res);
                                    if(!$studentid || ! $semester || !$marks || !$result) {
                                        echo '<script type="text/javascript">';
                                        echo 'alert("fill all the fields");';
                                        echo '</script>';
                                    }
                                    else if($res) {
                                        $sql = "update student_academics set
                                        semester=$semester,
                                        marks=$marks,
                                        result='$result',
                                        remark='$remark'
                                        where studentid=$studentid;
                                        ";
                                        //print_r($sql);
                                        dbquery($sql);
                                        echo '<script type="text/javascript">';
                                        echo 'alert("Success");';
                                        echo '</script>';
                                    }
                                     else {
                                        $sql = "insert into student_academics (studentid, semester, marks,result, remark)
                                        values($studentid, $semester, $marks, '$result', '$remark');";
                                        dbquery($sql);  
                                        echo '<script type="text/javascript">';
                                        echo 'alert("Success");';
                                        echo '</script>';
                                    }
                                }
                            ?>
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