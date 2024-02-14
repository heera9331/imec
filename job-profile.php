<?php
include("protect.php");
include("functions.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
      <?php echo $siteName; ?>
    </title>
    <meta content="Admin Dashboard" name="description"/>
    <meta content="CyberDairy" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
    <!-- Responsive datatable examples -->
    <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

    <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css"
          rel="stylesheet"/>
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

<div class="container-fluid position-absolute" style="margin-top: 150px;">
    <div class="row">
        <div class="col-sm-12">
            <div class="card m-b-20">
                <p class="content-page py-2 text-success">
                    This is profile is visible for recruiters only
                </p>
                <div class="card-body">
                        <div class="content clearfix">
                            <h4 id="form-horizontal-h-0" tabindex="-1" class="title current">Student Details
                        <div class="d-inline-block p-2">
                            <a class="link active cursor-pointer" href="./job-profile-preview.php?id=<?php echo $_SESSION['userid'];?>
                            "><i class="fa fa-eye"></i></a>
                        </div>
                            </h4>
                            <!-- personal information section -->
                            <form method="post" action="./job-profile.php">
                                <fieldset id="form-horizontal-p-0" aria-labelledby="form-horizontal-h-0"
                                          class="body current" aria-hidden="false">
                                    <h6>Personal Information</h6>
                                    <div class="row border py-4">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="firstname" class="col-lg-3 col-form-label">First Name</label>
                                                <div class="col-lg-9">
                                                    <input required id="firstname" name="firstname" type="text"
                                                           class="form-control" placeholder="Enter first name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="lastname" class="col-lg-3 col-form-label">Last Name</label>
                                                <div class="col-lg-9">
                                                    <input required id="lastname" name="lastname" type="text"
                                                           class="form-control" placeholder="Enter last  name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class="col-lg-3 col-form-label">Email</label>
                                                <div class="col-lg-9">
                                                    <input required id="email" name="email" type="text"
                                                           class="form-control" placeholder="Enter email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="phone" class="col-lg-3 col-form-label">Mobile Number</label>
                                                <div class="col-lg-9">
                                                    <input required id="phone" name="phone" type="number" class="form-control"
                                                           placeholder="Enter mobile number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="address" class="col-lg-3 col-form-label">Address
                                                    1</label>
                                                <div class="col-lg-9">
                                                <textarea required id="address" name="address" rows="4"
                                                          class="form-control"
                                                          placeholder="Civil line, Sagar MP - 470001"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <button class="btn btn-primary my-2" type="submit" name="personal_details_save">
                                            <i class="fa fa-save"></i>
                                            <span class="mx-2">Save</span>
                                        </button>
                                    </div>


                                </fieldset>
                              <?php
                              if(isset($_POST['personal_details_save'])) {
                                $firstName = $_POST['firstname'];
                                $lastName = $_POST['lastname'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $address = $_POST['address'];

                                $studentid = $_SESSION['userid'];
                                // check if user fill details already
                                // if already then we update else insert
                                $query = "SELECT count(*) as count FROM student_info WHERE studentid = $studentid";
                                echo $res = dbqueryresult($query)[0]['count'];

                                // count 0 mean not present

                                  if($res == "0") {
                                    $query = "INSERT INTO student_info 
                            (studentid, firstname, lastname,email, phone, address) 
                    values ($studentid,'$firstName', '$lastName', '$email', '$phone', '$address');";
                                    dbquery($query);
                                  } else {
                                    $query = "UPDATE student_info
                                    set
                                    firstname='$firstName',
                                    lastname='$lastName',
                                    email='$email',
                                    phone='$phone',
                                    address='$address'
                                    WHERE studentid=$studentid
                                    ";
                                    dbquery($query);
                                  }
                                  echo '<script type="text/javascript">
                                        alert("success");
                                    </script>';
                                } 
                              ?>
                            </form>
                            <!-- education section -->
                            <form action="./job-profile.php" method="post">
                                <fieldset id="education" aria-labelledby="form-horizontal-h-0"
                                        class="body current" aria-hidden="false">
                                    <h6>Education Details</h6>
                                    <div class="row border py-4">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="degree" class="col-lg-3 col-form-label">Degree</label>
                                                <div class="col-lg-9">
                                                    <input id="degree" name="degree" type="text"
                                                        class="form-control"
                                                        placeholder="Enter degree i.e. BTech or class 12th">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="major" class="col-lg-3 col-form-label">Major Subject
                                                    (Specialization/Branch)</label>
                                                <div class="col-lg-9">
                                                    <input id="major" name="major" type="text"
                                                        class="form-control" placeholder="i.e. PCM, Computer Science">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="institution" class="col-lg-3 col-form-label">Institution</label>
                                                <div class="col-lg-9">
                                                    <input id="institution" name="institution" type="text"
                                                        class="form-control"
                                                        placeholder="School/College/University name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="degreestartdate" class="col-lg-3 col-form-label">Start Date</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="degreestartdate" name="degreestartdate" value="0000-00-00" placeholder="yyyy-mm-dd">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="marks" class="col-lg-3 col-form-label">Marks</label>
                                                <div class="col-lg-9">
                                                    <input type="number" class="form-control" id="marks" name="marks" placeholder="Enter marks in %">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="degreeenddate" class="col-lg-3 col-form-label">End Date</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="degreeenddate" name="degreeenddate" value="0000-00-00">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <button class="btn btn-primary my-2" type="submit" name="education_save">
                                            <i class="fa fa-save"></i>
                                            <span class="mx-2">Save</span>
                                        </button>
                                    </div>
    
                                    <?php
                                if(isset($_POST['education_save'])) {
                                    $degree = $_POST['degree'];
                                    $major = $_POST['major'];
                                    $degreestartdate = $_POST['degreestartdate'];
                                    $degreeenddate = $_POST['degreeenddate'];
                                    $institution = $_POST['institution'];
                                    $marks = $_POST['marks']; 
                                    $studentid = $_SESSION['userid']; 
    
                                    $query = "INSERT INTO education (studentid, degree, major,institution, startdate,enddate,marks) 
                                    values ($studentid,'$degree', '$major', '$institution', '$degreestartdate', '$degreestartdate', $marks);";
                                    dbquery($query);
                                    
                                    echo '<script type="text/javascript">
                                        alert("success, you add another education");
                                    </script>';
                                    } 
                                ?> 

                                </fieldset>
                            </form>
                            <!-- skills section -->
                            <form action="./job-profile.php" method="post">
                                <fieldset id="skills" aria-labelledby="form-horizontal-h-0"
                                        class="body current" aria-hidden="false">
                                    <h6>Skills</h6>
                                    <div class="row border py-4">
                                        <div class="col-md-6 px-4">
                                            <label for="skill" class="col-lg-6 text-left col-form-label">Level</label>
                                            <input id="skill" name="skill" type="text"
                                                class="form-control" placeholder="i.e. Java, Python, React, etc.." required>
                                        </div>
                                        <div class="col-md-6 px-4">
                                            <label for="level" class="col-lg-6 text-left col-form-label">Level</label>
                                            <input id="level" name="level" type="number" min="0" max="10"
                                                class="form-control" placeholder="range between [1, 10]" required>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center justify-content-center">
                                        <button class="btn btn-primary my-2" type="submit" name="skills_save"
                                        >
                                            <i class="fa fa-save"></i>
                                            <span class="mx-2">Save</span>
                                        </button>
                                    </div>
                                </fieldset>
                                <?php
                                    if(isset($_POST['skills_save'])) {
                                        $skill = $_POST['skill'];
                                        $level = $_POST['level'];
                                        $studentid = $_SESSION['userid'];

                                        $query = "INSERT INTO `skills` (`studentid`, `skill`, `level`) VALUES ($studentid,'$skill',$level);";
                                        dbquery($query);
                                    
                                        echo '<script type="text/javascript">
                                            alert("success, you add another skill, make sure do not add repeated skill");
                                        </script>';
                                    }  
                                ?>
                            </form>
                            
                            <!-- experience section -->
                            <form action="./job-profile.php" method="post">
                                <fieldset id="work-experience" aria-labelledby="form-horizontal-h-0"
                                        class="body current" aria-hidden="false">
                                    <h6>Work Experience</h6>
                                    <div class="row border py-4">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="company" class="col-lg-3 col-form-label">Company</label>
                                                <div class="col-lg-9">
                                                    <input id="company" name="company" type="text"
                                                        class="form-control" placeholder="Enter company name" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="position" class="col-lg-3 col-form-label">Position</label>
                                                <div class="col-lg-9">
                                                    <input id="position" name="position" type="text"
                                                        class="form-control" placeholder="Enter position" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="workstartdate" class="col-lg-3 col-form-label">Start Date</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="workstartdate" name="workstartdate" value="0000-00-00" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="workenddate" class="col-lg-3 col-form-label">End Date</label>
                                                <div class="col-lg-9">
                                                    <input type="text" class="form-control" id="workenddate" name="workenddate" value="0000-00-00" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="years" class="col-lg-3 col-form-label">Years</label>
                                                <div class="col-lg-9">
                                                    <input type="text" id="years" name="years"  
                                                            class="form-control"
                                                            placeholder="Year of experience" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="description" class="col-lg-3 col-form-label">Description</label>
                                                <div class="col-lg-9">
                                                    <textarea id="description" name="description" rows="4"
                                                            class="form-control"
                                                            placeholder="About your experience" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-center justify-content-center mb-5">
                                        <button class="btn btn-primary my-2" type="submit" name="work_save"
                                        >
                                            <i class="fa fa-save"></i>
                                            <span class="mx-2">Save</span>
                                        </button>
                                    </div>
                                </fieldset>
                                    <?php
                                    
                                        if(isset($_POST['work_save'])) {
                                            $company = $_POST['company']; 
                                            $position = $_POST['position']; 
                                            $workstartdate = $_POST['workstartdate']; 
                                            $workenddate = $_POST['workenddate']; 
                                            $description = $_POST['description']; 
                                            $years = $_POST['years'];
                                            $studentid = $_SESSION['userid'];

                                            $query = "INSERT INTO `work_experience`(`studentid`, `company`, `position`, `description`, `years`, `startdate`, `enddate`) VALUES ($studentid,'$company','$position', '$description',$years,'$workstartdate','$workenddate');";
                                            dbquery($query);
                                        
                                            echo '<script type="text/javascript">
                                                alert("success, you add another experience, make sure do not add repeated skill");
                                            </script>';
                                        }  
                                    ?>

                                    <div style="padding-bottom: 200px">

                                    </div>
                            </form>
                            
                        </div>


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


    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>