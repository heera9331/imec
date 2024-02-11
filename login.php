<?php
session_start();
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
							$username = $_POST['username'];
							$pwd =  md5($_POST['userpassword']);
							$sql = "select id, enrollment, fullname from students where enrollment = '$username' and password = '$pwd'";
							
							$result = dbqueryresult($sql);
							$count = count($result);
							if($count == 0)
							{
								echo "<h5>Something is not right here</h5>";
							}
							else if($count == 1)
							{
								$_SESSION['enrollment'] = $result[0]['enrollment'];;
								$_SESSION['full_name'] = $result[0]['fullname'];
								$_SESSION['userid'] = $result[0]['id'];
								redirect("index.php");
							}
						}
                       
					?>
                        <form class="form-horizontal m-t-30" action="login.php" method = "POST">

                            <div class="form-group">
                                <label for="username">Enrollment No.</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter username" value = "" required />
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" name="userpassword" id="userpassword" value = "" placeholder="Enter password" required />
                            </div>

                            <div class="form-group row m-t-20">
                                
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" name = "submit" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group"> 
                                Dont' have an account? <a href="./register.php">Create Account</a>
                            </div>
                            <!--                             
                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                            -->
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
            /*$(document).ready(function(){
                $("#forgotpassword").click(function(){
                    ///var email = $("#forgot").val();
                    $.get("forgot-password-ajax.php?email="+email, function(data, status){
                        $("#response").html(data); 
                    });
                    alert($("#forgot").val());
                });
            });*/
            
        </script>
    </body>
</html>