<?php include 'layouts/header.php'; ?>

<?php include 'layouts/headerStyle.php'; ?>

    <body>

        <?php include 'layouts/loader.php'; ?>

        <?php include 'layouts/navbar.php'; ?>

        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                    <li class="breadcrumb-item active">Contact</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Contact</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <h5>Have any questions?</h5>
                                            <p class="text-muted">It is a long established fact that a reader will be of a page when looking at its layout.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-t-40">
                                    <div class="col-md-4">
                                        <div>
                                            <h6 class="font-14">Email Address</h6>
                                            <p class="text-muted">supportemail@admiria  .com</p>
                                        </div>
                                        <div class="pt-3">
                                            <h6 class="font-14">Telephone number</h6>
                                            <p class="text-muted">+123 45 56 879</p>
                                        </div>
                                        <div class="pt-3">
                                            <h6 class="font-14">Address</h6>
                                            <p class="text-muted">09 Design Street, Downtown Victoria, Australia</p>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <form class="form-custom">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="username">Name</label>
                                                        <input type="text" class="form-control" id="username" placeholder="Your Name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="useremail">Email address</label>
                                                        <input type="email" class="form-control" id="useremail" placeholder="Your Email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="usersubject">Subject</label>
                                                        <input type="text" class="form-control" id="usersubject" placeholder="Subject" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5" placeholder="Your Message...."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>
        
        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>