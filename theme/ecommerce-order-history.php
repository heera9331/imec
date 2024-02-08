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
                                    <li class="breadcrumb-item active">Order History</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Order History</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-white">
                            <span class="font-40 text-primary mr-0 float-right"><i class="mdi mdi-cart-outline"></i></span>
                            <div class="mini-stat-info">
                                <h3 class="counter font-light mt-0">$36,410</h3>
                            </div>
                            <div class="clearfix"></div>
                            <p class=" mb-0 m-t-10 text-muted">Total Orders <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>3.25%</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-white">
                            <span class="font-40 text-success mr-0 float-right"><i class="mdi mdi-currency-usd"></i></span>
                            <div class="mini-stat-info">
                                <h3 class="counter font-light mt-0">$29,854</h3>
                            </div>
                            <div class="clearfix"></div>
                            <p class=" mb-0 m-t-10 text-muted">Successful Orders <span class="pull-right"><i class="fa fa-caret-up text-success m-r-5"></i>8.51%</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-white">
                            <span class="font-40 text-warning mr-0 float-right"><i class="mdi mdi-fingerprint"></i></span>
                            <div class="mini-stat-info">
                                <h3 class="counter font-light mt-0">$4,512</h3>
                            </div>
                            <div class="clearfix"></div>
                            <p class=" mb-0 m-t-10 text-muted">Refunds <span class="pull-right"><i class="fa fa-caret-down text-danger m-r-5"></i>5.52%</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-white">
                            <span class="font-40 text-danger mr-0 float-right"><i class="mdi mdi-rotate-right"></i></span>
                            <div class="mini-stat-info">
                                <h3 class="counter font-light mt-0">$2,854</h3>
                            </div>
                            <div class="clearfix"></div>
                            <p class=" mb-0 m-t-10 text-muted">Chargebacks <span class="pull-right"><i class="fa fa-caret-up text-success m-r-5"></i>7.10%</span></p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <table id="datatable" class="table table-striped dt-responsive nowrap table-vertical" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Amount</th>
                                        <th>Order Date</th>
                                        <th>Payment</th>
                                        <th>Billing Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#98541201</a>
                                        </td>
                                        <td>$45</td>
                                        <td>Jul 20, 2017</td>
                                        <td><i class="fa fa-cc-visa text-muted font-20"></i> </td>
                                        <td>Herbert C. Patton</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#85124562</a>
                                        </td>
                                        <td>$521</td>
                                        <td>Jul 18, 2017</td>
                                        <td><i class="fa fa-cc-mastercard text-muted font-20"></i> </td>
                                        <td>Mathias N. Klausen</td>
                                        <td><span class="badge badge-warning">Refund</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#45123698</a>
                                        </td>
                                        <td>$241</td>
                                        <td>July 14, 2017</td>
                                        <td><i class="fa fa-cc-paypal text-muted font-20"></i> </td>
                                        <td>Nikolaj S. Henriksen</td>
                                        <td><span class="badge badge-warning">Refund</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#85214796</a>
                                        </td>
                                        <td>$541.34</td>
                                        <td>Jul 15, 2017</td>
                                        <td><i class="fa fa-cc-paypal text-muted font-20"></i> </td>
                                        <td>Kasper S. Jessen</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#23145216</a>
                                        </td>
                                        <td>$22</td>
                                        <td>Jul 11, 2017</td>
                                        <td><i class="fa fa-cc-amex text-muted font-20"></i> </td>
                                        <td>Lasse C. Overgaard</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#12365474</a>
                                        </td>
                                        <td>$1,541</td>
                                        <td>Jul 10, 2017</td>
                                        <td><i class="fa fa-cc-mastercard text-muted font-20"></i> </td>
                                        <td>Johan E. Knudsen</td>
                                        <td><span class="badge badge-danger">Chargeback</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#32569874</a>
                                        </td>
                                        <td>$54</td>
                                        <td>Jul 09, 2017</td>
                                        <td><i class="fa fa-cc-visa text-muted font-20"></i> </td>
                                        <td>Herbert C. Patton</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#52147321</a>
                                        </td>
                                        <td>$845</td>
                                        <td>Jul 08, 2017</td>
                                        <td><i class="fa fa-cc-discover text-muted font-20"></i> </td>
                                        <td>Mathias N. Klausen</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#84125369</a>
                                        </td>
                                        <td>$421</td>
                                        <td>Jul 08, 2017</td>
                                        <td><i class="fa fa-cc-paypal text-muted font-20"></i> </td>
                                        <td>Nikolaj S. Henriksen</td>
                                        <td><span class="badge badge-danger">Chargeback</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#74512368</a>
                                        </td>
                                        <td>$652</td>
                                        <td>Jul 02, 2017</td>
                                        <td><i class="fa fa-cc-mastercard text-muted font-20"></i> </td>
                                        <td>Lasse C. Overgaard</td>
                                        <td><span class="badge badge-danger">Chargeback</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#52140300</a>
                                        </td>
                                        <td>$45</td>
                                        <td>Jul 20, 2017</td>
                                        <td><i class="fa fa-cc-visa text-muted font-20"></i> </td>
                                        <td>Herbert C. Patton</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#85214369</a>
                                        </td>
                                        <td>$521</td>
                                        <td>Jul 18, 2017</td>
                                        <td><i class="fa fa-cc-mastercard text-muted font-20"></i> </td>
                                        <td>Mathias N. Klausen</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#87412456</a>
                                        </td>
                                        <td>$241</td>
                                        <td>July 14, 2017</td>
                                        <td><i class="fa fa-cc-paypal text-muted font-20"></i> </td>
                                        <td>Nikolaj S. Henriksen</td>
                                        <td><span class="badge badge-danger">Chargeback</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#99541241</a>
                                        </td>
                                        <td>$541.34</td>
                                        <td>Jul 15, 2017</td>
                                        <td><i class="fa fa-cc-paypal text-muted font-20"></i> </td>
                                        <td>Kasper S. Jessen</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#12354781</a>
                                        </td>
                                        <td>$22</td>
                                        <td>Jul 11, 2017</td>
                                        <td><i class="fa fa-cc-amex text-muted font-20"></i> </td>
                                        <td>Lasse C. Overgaard</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#95412367</a>
                                        </td>
                                        <td>$1,541</td>
                                        <td>Jul 10, 2017</td>
                                        <td><i class="fa fa-cc-mastercard text-muted font-20"></i> </td>
                                        <td>Johan E. Knudsen</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#96254137</a>
                                        </td>
                                        <td>$54</td>
                                        <td>Jul 09, 2017</td>
                                        <td><i class="fa fa-cc-visa text-muted font-20"></i> </td>
                                        <td>Herbert C. Patton</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#50025441</a>
                                        </td>
                                        <td>$845</td>
                                        <td>Jul 08, 2017</td>
                                        <td><i class="fa fa-cc-discover text-muted font-20"></i> </td>
                                        <td>Mathias N. Klausen</td>
                                        <td><span class="badge badge-warning">Refund</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#32147851</a>
                                        </td>
                                        <td>$421</td>
                                        <td>Jul 08, 2017</td>
                                        <td><i class="fa fa-cc-paypal text-muted font-20"></i> </td>
                                        <td>Nikolaj S. Henriksen</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#52146321</a>
                                        </td>
                                        <td>$652</td>
                                        <td>Jul 02, 2017</td>
                                        <td><i class="fa fa-cc-mastercard text-muted font-20"></i> </td>
                                        <td>Lasse C. Overgaard</td>
                                        <td><span class="badge badge-success">Paid</span></td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="font-600 text-muted">#32147851</a>
                                        </td>
                                        <td>$421</td>
                                        <td>Jul 08, 2017</td>
                                        <td><i class="fa fa-cc-paypal text-muted font-20"></i> </td>
                                        <td>Nikolaj S. Henriksen</td>
                                        <td><span class="badge badge-success">Paid</span></td>
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