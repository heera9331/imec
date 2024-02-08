<?php include 'layouts/header.php'; ?>
        <!--Summer Note CSS -->
        <link rel="stylesheet" href="public/assets/plugins/summernote/summernote-bs4.css">
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
                                    <li class="breadcrumb-item"><a href="#">Email</a></li>
                                    <li class="breadcrumb-item active">Email Compose</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Email Compose</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <!-- Left sidebar -->
                        <div class="email-leftbar">
                            <a href="email-compose.php" class="btn btn-danger btn-rounded btn-custom btn-block waves-effect waves-light">Compose</a>

                            <div class="mail-list m-t-20">
                                <a href="#" class="active">Inbox <span class="ml-1">(18)</span></a>
                                <a href="#">Starred</a>
                                <a href="#">Important</a>
                                <a href="#">Draft</a>
                                <a href="#">Sent Mail</a>
                                <a href="#">Trash</a>
                            </div>


                            <h6 class="m-t-30">Labels</h6>

                            <div class="mail-list m-t-20">
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info pull-right mt-1 m-r-10"></span>Theme Support</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning pull-right mt-1 m-r-10"></span>Freelance</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-purple pull-right mt-1 m-r-10"></span>Social</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-pink pull-right mt-1 m-r-10"></span>Friends</a>
                                <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success pull-right mt-1 m-r-10"></span>Family</a>
                            </div>

                            <h6 class="m-t-30">Chat</h6>

                            <div class="m-t-20">
                                <a href="#" class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="36">
                                    <div class="media-body chat-user-box">
                                        <p class="user-title m-0">Scott Median</p>
                                        <p class="text-muted">Hello</p>
                                    </div>
                                </a>

                                <a href="#" class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="36">
                                    <div class="media-body chat-user-box">
                                        <p class="user-title m-0">Julian Rosa</p>
                                        <p class="text-muted">What about our next..</p>
                                    </div>
                                </a>

                                <a href="#" class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/avatar-4.jpg" alt="Generic placeholder image" height="36">
                                    <div class="media-body chat-user-box">
                                        <p class="user-title m-0">David Medina</p>
                                        <p class="text-muted">Yeah everything is fine</p>
                                    </div>
                                </a>

                                <a href="#" class="media">
                                    <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/avatar-6.jpg" alt="Generic placeholder image" height="36">
                                    <div class="media-body chat-user-box">
                                        <p class="user-title m-0">Jay Baker</p>
                                        <p class="text-muted">Wow that's great</p>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <!-- End Left sidebar -->


                        <!-- Right Sidebar -->
                        <div class="email-rightbar">
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                    <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                    <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-trash-o"></i></button>
                                </div>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-folder"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Updates</a>
                                        <a class="dropdown-item" href="#">Social</a>
                                        <a class="dropdown-item" href="#">Team Manage</a>
                                    </div>
                                </div>
                                <div class="btn-group ml-1">
                                    <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-tag"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Updates</a>
                                        <a class="dropdown-item" href="#">Social</a>
                                        <a class="dropdown-item" href="#">Team Manage</a>
                                    </div>
                                </div>

                                <div class="btn-group ml-1">
                                    <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        More
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">Mark as Unread</a>
                                        <a class="dropdown-item" href="#">Mark as Important</a>
                                        <a class="dropdown-item" href="#">Add to Tasks</a>
                                        <a class="dropdown-item" href="#">Add Star</a>
                                        <a class="dropdown-item" href="#">Mute</a>
                                    </div>
                                </div>
                            </div>


                            <div class="card m-t-20">
                                <div class="card-body">

                                    <form role="form">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="To">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <div class="summernote">
                                                <h6>Hello Summernote</h6>
                                                <ul>
                                                    <li>
                                                        Select a text to reveal the toolbar.
                                                    </li>
                                                    <li>
                                                        Edit rich document on-the-fly, so elastic!
                                                    </li>
                                                </ul>
                                                <p>
                                                    End of air-mode area
                                                </p>

                                            </div>
                                        </div>

                                        <div class="btn-toolbar form-group m-b-0">
                                            <div class="">
                                                <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-floppy-o"></i></button>
                                                <button type="button" class="btn btn-success waves-effect waves-light m-r-5"><i class="fa fa-trash-o"></i></button>
                                                <button class="btn btn-purple waves-effect waves-light"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                                            </div>
                                        </div>

                                    </form>

                                </div>

                            </div>


                        </div> <!-- end Col-9 -->

                    </div>

                </div><!-- End row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>

        <!--Summernote init-->
        <script src="public/assets/plugins/summernote/summernote-bs4.js"></script>
\
        <script>
            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 250,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
            });
        </script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>