<?php include 'layouts/header.php'; ?>

        <!-- DataTables -->
        <link href="public/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="public/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                                    <li class="breadcrumb-item active">Products List</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Products List</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Added Date</th>
                                            <th>Amount</th>
                                            <th>No. of Units</th>
                                            <th>Stock</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/1.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Riverston Glass Chair</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>22/05/2017</td>
                                            <td>$521</td>
                                            <td>5841</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/2.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Shine Company Catalina</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>28/03/2017</td>
                                            <td>$210</td>
                                            <td>841</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/3.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Trex Outdoor Furniture Cape</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>22/05/2017</td>
                                            <td>$652</td>
                                            <td>120</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/4.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Oasis Bathroom Teak Corner</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>11/05/2017</td>
                                            <td>$85</td>
                                            <td>320</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/5.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Condimentum Posuere</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>18/04/2017</td>
                                            <td>$8512</td>
                                            <td>201</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/6.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Micro Board</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>02/03/2017</td>
                                            <td>$521</td>
                                            <td>321</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/7.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">BeoPlay Speaker</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>12/05/2017</td>
                                            <td>$22</td>
                                            <td>5410</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/8.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Travelers Leather Bag</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>18/04/2017</td>
                                            <td>$98</td>
                                            <td>556</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/1.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Riverston Glass Chair</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>22/05/2017</td>
                                            <td>$521</td>
                                            <td>5841</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/2.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Shine Company Catalina</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>28/03/2017</td>
                                            <td>$210</td>
                                            <td>841</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/3.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Trex Outdoor Furniture Cape</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>22/05/2017</td>
                                            <td>$652</td>
                                            <td>120</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/4.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Oasis Bathroom Teak Corner</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>11/05/2017</td>
                                            <td>$85</td>
                                            <td>320</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/5.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Condimentum Posuere</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>18/04/2017</td>
                                            <td>$8512</td>
                                            <td>201</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 79%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/6.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Micro Board</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>02/03/2017</td>
                                            <td>$521</td>
                                            <td>321</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/7.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">BeoPlay Speaker</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>12/05/2017</td>
                                            <td>$22</td>
                                            <td>5410</td>
                                            <td>
                                                <div class="progress m-b-10">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 95%; height: 5px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-list-img">
                                                <img src="public/assets/images/products/8.jpg" class="img-fluid" alt="tbl">
                                            </td>
                                            <td>
                                                <h6 class="mt-0 m-b-5">Travelers Leather Bag</h6>
                                                <p class="m-0 font-14">Lorem ipsum dolor sit consec te imperdiet iaculis ipsum..</p>
                                            </td>
                                            <td>18/04/2017</td>
                                            <td>$98</td>
                                            <td>556</td>
                                            <td>
                                                <div class="progress m-b-10" style="height: 5px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 45%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                                <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <?php include 'layouts/footer.php'; ?>

        <?php include 'layouts/footerScript.php'; ?>

        <!-- Datatable js -->
        <script src="public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="public/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Responsive examples -->
        <script src="public/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="public/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#datatable').DataTable();
            });
        </script>


    </body>
</html>