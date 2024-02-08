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
                                    <li class="breadcrumb-item"><a href="#">UI Kit</a></li>
                                    <li class="breadcrumb-item active">Images</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Images</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Image thumbnails</h4>
                                <p class="text-muted m-b-30 font-14">In addition to our border-radius utilities, you can use
                                    <code class="highlighter-rouge">.img-thumbnail</code> to give an image a
                                    rounded 1px border appearance.</p>

                                <div class="">
                                    <img class="img-thumbnail" alt="200x200" style="width: 200px; height: 200px;" src="public/assets/images/small/img-3.jpg" data-holder-rendered="true">
                                </div>
                            </div>
                        </div>

                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Image Rounded & Circle</h4>
                                <p class="text-muted m-b-30 font-14">Use classes
                                    <code>.rounded</code> and <code>.rounded-circle</code>.</p>

                                <div class="">
                                    <img class="rounded mr-2" alt="200x200" style="width: 200px;" src="public/assets/images/small/img-4.jpg" data-holder-rendered="true">
                                    <img class="rounded-circle" alt="200x200" src="public/assets/images/users/avatar-4.jpg" data-holder-rendered="true">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Responsive images</h4>
                                <p class="text-muted m-b-30 font-14">Images in Bootstrap are made responsive
                                    with <code class="highlighter-rouge">.img-fluid</code>. <code
                                            class="highlighter-rouge">max-width: 100%;</code> and <code
                                            class="highlighter-rouge">height: auto;</code> are applied to
                                    the image so that it scales with the parent element.</p>

                                <div class="">
                                    <img src="public/assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Default media object</h4>
                                <p class="text-muted m-b-30 font-14">The default media displays a media
                                    object (images, video, audio) to the left or right of a content
                                    block.</p>

                                <div class="media m-b-30">
                                    <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/avatar-6.jpg" alt="Generic placeholder image" height="64">
                                    <div class="media-body">
                                        <h5 class="mt-0 font-18">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>


                                <div class="media m-b-30">
                                    <img class="d-flex mr-3 rounded-circle" src="public/assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="64">
                                    <div class="media-body">
                                        <h5 class="mt-0 font-18">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                                        <div class="media mt-3">
                                            <a class="d-flex pr-3" href="#">
                                                <img src="public/assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="64" class="rounded-circle">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="mt-0 font-18">Media heading</h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1 font-18">Media object</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                    <img class="d-flex ml-3 rounded-circle" src="public/assets/images/users/avatar-4.jpg" alt="Generic placeholder image" height="64">
                                </div>


                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Media alignment</h4>
                                <p class="text-muted m-b-30 font-14">The images or other media can be
                                    aligned top, middle, or bottom. The default is top aligned.</p>

                                <div class="media m-b-30">
                                    <img class="d-flex align-self-start mr-3" src="public/assets/images/users/avatar-3.jpg" alt="Generic placeholder image" height="64">
                                    <div class="media-body">
                                        <h5 class="mt-0 font-18">Top-aligned media</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    </div>
                                </div>

                                <div class="media m-b-30">
                                    <img class="d-flex align-self-center mr-3" src="public/assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="64">
                                    <div class="media-body">
                                        <h5 class="mt-0 font-18">Center-aligned media</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                                    </div>
                                </div>

                                <div class="media">
                                    <img class="d-flex align-self-end mr-3" src="public/assets/images/users/avatar-1.jpg" alt="Generic placeholder image" height="64">
                                    <div class="media-body">
                                        <h5 class="mt-0 font-18">Bottom-aligned media</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                        <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
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