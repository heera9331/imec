<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admiria - Responsive Flat Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="public/assets/images/favicon.ico">

        <!-- Basic Css files -->
        <link href="public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="public/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="public/assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>


        <!-- Begin page -->
        <div class="accountbg" style="background: url('public/assets/images/bg-2.jpg');background-size: cover;"></div>
        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="/" class="logo logo-admin"><img src="public/assets/images/logo.png" height="30" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Locked</h4>
                        <p class="text-muted text-center">Hello Smith, enter your password to unlock the screen!</p>

                        <form class="form-horizontal m-t-30" action="/">

                            <div class="user-thumb text-center m-b-30">
                                <img src="public/assets/images/users/avatar-1.jpg" class="rounded-circle img-thumbnail" alt="thumbnail">
                                <h6>Robert Smith</h6>
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                            </div>

                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Unlock</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="">Not you ? return <a href="pages-login-2.php" class="font-500 font-14 font-secondary"> Sign In </a> </p>
                <p class="">© <?php echo date("Y",strtotime("-1 year")); ?> -  <?php echo date("Y"); ?> Admiria. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
            </div>

        </div>


        <!-- jQuery  -->
        <script src="public/assets/js/jquery.min.js"></script>
        <script src="public/assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="public/assets/js/bootstrap.min.js"></script>
        <script src="public/assets/js/modernizr.min.js"></script>
        <script src="public/assets/js/jquery.slimscroll.js"></script>
        <script src="public/assets/js/waves.js"></script>
        <script src="public/assets/js/jquery.nicescroll.js"></script>
        <script src="public/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>
    </body>
</html>