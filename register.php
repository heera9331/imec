<?php
include("functions.php");
include("constants.php");
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?php echo $siteName; ?></title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="CyberDairy Solutions" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Basic Css files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />

   
    </head>


    <body class="fixed-left">
        
        <!-- Loader 
			<div id="preloader"><div id="status"><div class="spinner"></div></div></div>
		-->

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <?php echo $siteName; ?>
                    </h3>

                    <div class="p-3">
                        <h4 class="font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to Customer Management Portal</p>
						<?php
						if(isset($_POST['submit']))
						{
							$enrollment = $_POST['enrollment'];
							$password =  md5($_POST['password']);
							$branch = $_POST['branch'];
                            // before registering the student, first we check if student already an account or not?
                            // let's check

                            $res = getStudent($enrollment); 
                             
                            if($res) {
                                echo '<script type="text/javascript">';
                                echo 'alert("You have already an account please login");';
                                echo '</script>'; 
                            }
                            else {
                                $sql = "insert into students (enrollment, password, branch) values('$enrollment', '$password', '$branch');";
                                $tmp = registerStudent($sql);
                                if($tmp) {
                                    echo '<script type="text/javascript">';
                                    echo 'alert("Successfully account created, you can login now");';
                                    echo '</script>'; 
                                }
                                else {
                                    echo '<script type="text/javascript">';
                                    echo 'alert("Something went wrong, try again");';
                                    echo '</script>'; 
                                }
                            }
							 
						}
                       
					?>
                        <form class="form-horizontal m-t-30" action="register.php" method = "POST">

                            <div class="form-group">
                                <label for="enrollment">Enrollment No.</label>
                                <input type="text" class="form-control" name="enrollment" id="enrollment" placeholder="Enter enrollment" value = "" required />
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" value = "" placeholder="Enter password" required />
                            </div>

                            <div class="form-group d-flex align-items-center ">
                                <label for="branch" class="pr-2">Course</label>
                                <select name="branch" id="branch">
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="branch">Branch</label>
                                <input type="text" class="form-control" name="branch" id="branch" placeholder="Enter branch" required />
                            </div>

                            <div class="form-group row m-t-20">
                                
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" name = "submit" type="submit">Register</button>
                                </div>
                            </div>

                            <div class="form-group"> 
                                I have an account? <a href="./login.php">Login</a>
                            </div>
                           
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                
                <p class="text-white">© 2020 CyberDairy Solutions. </p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script>
            
            
        </script>
    </body>
</html>