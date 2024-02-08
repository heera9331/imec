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
                                    <li class="breadcrumb-item active">Timeline</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Timeline</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">

                                <section id="cd-timeline" class="cd-container">
                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-success">
                                            <i class="mdi mdi-adjust"></i>
                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event One</h3>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                            <span class="cd-date">May 23</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-danger">
                                            <i class="mdi mdi-adjust"></i>
                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event Two</h3>
                                            <p class="m-b-20 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light m-t-5">See more detail</button>

                                            <span class="cd-date">May 30</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-info">
                                            <i class="mdi mdi-adjust"></i>
                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event Three</h3>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat ... <a href="#">Read more</a></p>
                                            <span class="cd-date">Jun 05</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-pink">
                                            <i class="mdi mdi-adjust"></i>
                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event Four</h3>
                                            <p class="m-b-20 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                            <img src="public/assets/images/small/img-1.jpg" alt="" class="rounded" style="width: 120px;">
                                            <img src="public/assets/images/small/img-2.jpg" alt="" class="rounded" style="width: 120px;">
                                            <span class="cd-date">Jun 14</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-warning">
                                            <i class="mdi mdi-adjust"></i>
                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event Five</h3>
                                            <p class="m-b-20 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light">See more detail</button>
                                            <span class="cd-date">Jun 18</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">
                                        <div class="cd-timeline-img bg-primary">
                                            <i class="mdi mdi-adjust"></i>
                                        </div> <!-- cd-timeline-img -->

                                        <div class="cd-timeline-content">
                                            <h3>Timeline Event End</h3>
                                            <p class="mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
                                            <span class="cd-date">Jun 30</span>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->
                                </section> <!-- cd-timeline -->

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>