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

        <section class="mt-5 mb-5">
            <div class="container-alt container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="home-wrapper m-t-40">
                            <img src="public/assets/images/logo.png" alt="logo" height="30" />
                            <h3 class="m-t-30">Coming Soon</h3>
                            <p>We are working hard to launch a new website with new features. </p>

                            <ul class="row count-down m-t-40">
                                <li class="col-lg-3 col-md-6">
                                    <input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="200" data-height="200" data-thickness="0.07" data-fgcolor="#34aadc" data-bgColor="#e1e2e6" data-angleOffset="180">
                                    <span id="days-title">days</span>
                                </li>
                                <li class="col-lg-3 col-md-6">
                                    <input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="200" data-height="200" data-thickness="0.07" data-fgcolor="#4cd964" data-bgColor="#e1e2e6" data-angleOffset="180">
                                    <span id="hours-title">hours</span>
                                </li>
                                <li class="col-lg-3 col-md-6">
                                    <input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.07" data-fgcolor="#ff9500" data-bgColor="#e1e2e6" data-angleOffset="180">
                                    <span id="mins-title">minutes</span>
                                </li>
                                <li class="col-lg-3 col-md-6">
                                    <input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.07" data-fgcolor="#ff3b30" data-bgColor="#e1e2e6" data-angleOffset="180">
                                    <span id="secs-title">seconds</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- jQuery  -->
        <script src="public/assets/js/jquery.min.js"></script>
        <script src="public/assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="public/assets/js/bootstrap.min.js"></script>
        <script src="public/assets/js/modernizr.min.js"></script>
        <script src="public/assets/js/jquery.slimscroll.js"></script>
        <script src="public/assets/js/waves.js"></script>
        <script src="public/assets/js/jquery.nicescroll.js"></script>
        <script src="public/assets/js/jquery.scrollTo.min.js"></script>

        <!-- Countdown js -->
        <script src="public/assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Countdown js -->
        <script src="public/assets/plugins/jquery-ccountdown/init.js"></script>
        <script src="public/assets/plugins/jquery-ccountdown/jquery.ccountdown.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    <script type="text/javascript">
        $(".count-down").ccountdown(2019,12,31,'23:59');
    </script>

    </body>
</html>