<?php include 'layouts/header.php'; ?>

<!-- C3 charts css -->
<link href="public/assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css" />

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
                                    <li class="breadcrumb-item"><a href="#">Admiria</a></li>
                                    <li class="breadcrumb-item active">Dashboard 1</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->


                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-purple mr-0 float-right"><i class="mdi mdi-basket"></i></span>
                            <div class="mini-stat-info">
                                <span class="counter text-purple">25140</span>
                                Total Sales
                            </div>
                            <div class="clearfix"></div>
                            <p class=" mb-0 m-t-20 text-muted">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-blue-grey mr-0 float-right"><i class="mdi mdi-black-mesa"></i></span>
                            <div class="mini-stat-info">
                                <span class="counter text-blue-grey">65241</span>
                                New Orders
                            </div>
                            <div class="clearfix"></div>
                            <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-brown mr-0 float-right"><i class="mdi mdi-buffer"></i></span>
                            <div class="mini-stat-info">
                                <span class="counter text-brown">85412</span>
                                New Users
                            </div>
                            <div class="clearfix"></div>
                            <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="mini-stat clearfix bg-white">
                            <span class="mini-stat-icon bg-teal mr-0 float-right"><i class="mdi mdi-coffee"></i></span>
                            <div class="mini-stat-info">
                                <span class="counter text-teal">20544</span>
                                Unique Visitors
                            </div>
                            <div class="clearfix"></div>
                            <p class="text-muted mb-0 m-t-20">Total income: $22506 <span class="pull-right"><i class="fa fa-caret-up m-r-5"></i>10.25%</span></p>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="col-xl-9">

                        <div class="row">
                            <div class="col-md-9 pr-md-0">
                                <div class="card m-b-20" style="height: 486px;">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Monthly Earnings</h4>

                                        <div class="text-center">
                                            <div class="btn-group m-t-20" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-secondary">Day</button>
                                                <button type="button" class="btn btn-secondary">Month</button>
                                                <button type="button" class="btn btn-secondary">Year</button>
                                            </div>
                                        </div>

                                        <div id="combine-chart" class="m-t-20"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 pl-md-0">
                                <div class=" card m-b-20" style="height: 486px;">
                                    <div class="card-body">
                                        <div class="m-b-20">
                                            <p>Weekly Earnings</p>
                                            <h5>$1,542</h5>
                                            <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(103,168,228,0.3)"],"stroke": ["rgba(103,168,228,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                        </div>
                                        <div class="m-b-20">
                                            <p>Monthly Earnings</p>
                                            <h5>$6,451</h5>
                                            <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(74,193,142,0.3)"],"stroke": ["rgba(74,193,142,0.8)"]}' data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                        </div>
                                        <div class="m-b-20">
                                            <p>Yearly Earnings</p>
                                            <h5>$84,574</h5>
                                            <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(232, 65, 38,0.3)"],"stroke": ["rgba(232, 65, 38,0.8)"]}' data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Sales Analytics</h4>

                                <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">25610</h5>
                                        <p class="text-muted font-14">Activated</p>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 class="mb-0">56210</h5>
                                        <p class="text-muted font-14">Pending</p>
                                    </li>
                                </ul>

                                <div id="donut-chart"></div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-xl-3">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title m-b-30">Recent Stock</h4>

                                <div class="text-center">
                                    <input class="knob" data-width="120" data-height="120" data-linecap=round
                                           data-fgColor="#ffbb44" value="80" data-skin="tron" data-angleOffset="180"
                                           data-readOnly=true data-thickness=".1"/>

                                    <div class="clearfix"></div>
                                    <a href="#" class="btn btn-sm btn-warning m-t-20">View All Data</a>
                                    <ul class="list-inline row m-t-30 clearfix">
                                        <li class="col-6">
                                            <p class="m-b-5 font-18 font-600">7,541</p>
                                            <p class="mb-0">Mobile Phones</p>
                                        </li>
                                        <li class="col-6">
                                            <p class="m-b-5 font-18 font-600">125</p>
                                            <p class="mb-0">Desktops</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title m-b-30">Purchase Order</h4>

                                <div class="text-center">
                                    <input class="knob" data-width="120" data-height="120" data-linecap=round
                                           data-fgColor="#4ac18e" value="68" data-skin="tron" data-angleOffset="180"
                                           data-readOnly=true data-thickness=".1"/>

                                    <div class="clearfix"></div>
                                    <a href="#" class="btn btn-sm btn-success m-t-20">View All Data</a>
                                    <ul class="list-inline row m-t-30 clearfix">
                                        <li class="col-6">
                                            <p class="m-b-5 font-18 font-600">2,541</p>
                                            <p class="mb-0">Mobile Phones</p>
                                        </li>
                                        <li class="col-6">
                                            <p class="m-b-5 font-18 font-600">874</p>
                                            <p class="mb-0">Desktops</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title m-b-30">Shipped Orders</h4>

                                <div class="text-center">
                                    <input class="knob" data-width="120" data-height="120" data-linecap=round
                                           data-fgColor="#8d6e63" value="39" data-skin="tron" data-angleOffset="180"
                                           data-readOnly=true data-thickness=".1"/>

                                    <div class="clearfix"></div>
                                    <a href="#" class="btn btn-sm btn-brown m-t-20">View All Data</a>
                                    <ul class="list-inline row m-t-30 clearfix">
                                        <li class="col-6">
                                            <p class="m-b-5 font-18 font-600">1,154</p>
                                            <p class="mb-0">Mobile Phones</p>
                                        </li>
                                        <li class="col-6">
                                            <p class="m-b-5 font-18 font-600">89</p>
                                            <p class="mb-0">Desktops</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 header-title m-b-30">Cancelled Orders</h4>

                                <div class="text-center">
                                    <input class="knob" data-width="120" data-height="120" data-linecap=round
                                           data-fgColor="#90a4ae" value="95" data-skin="tron" data-angleOffset="180"
                                           data-readOnly=true data-thickness=".1"/>

                                    <div class="clearfix"></div>
                                    <a href="#" class="btn btn-sm btn-blue-grey m-t-20">View All Data</a>
                                    <ul class="list-inline row m-t-30 clearfix">
                                        <li class="col-6">
                                            <p class="m-b-5 font-18 font-600">95</p>
                                            <p class="mb-0">Mobile Phones</p>
                                        </li>
                                        <li class="col-6">
                                            <p class="m-b-5 font-18 font-600">25</p>
                                            <p class="mb-0">Desktops</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 m-b-30 header-title">Latest Transactions</h4>

                                <div class="table-responsive">
                                    <table class="table table-vertical">

                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="public/assets/images/users/avatar-2.jpg" alt="user-image" class="thumb-sm rounded-circle"/>
                                                Herbert C. Patton
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                            <td>
                                                $14,584
                                                <p class="m-0 text-muted font-14">Amount</p>
                                            </td>
                                            <td>
                                                5/12/2016
                                                <p class="m-0 text-muted font-14">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="public/assets/images/users/avatar-3.jpg" alt="user-image" class="thumb-sm rounded-circle"/>
                                                Mathias N. Klausen
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Waiting payment</td>
                                            <td>
                                                $8,541
                                                <p class="m-0 text-muted font-14">Amount</p>
                                            </td>
                                            <td>
                                                10/11/2016
                                                <p class="m-0 text-muted font-14">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="public/assets/images/users/avatar-4.jpg" alt="user-image" class="thumb-sm rounded-circle"/>
                                                Nikolaj S. Henriksen
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                            <td>
                                                $954
                                                <p class="m-0 text-muted font-14">Amount</p>
                                            </td>
                                            <td>
                                                8/11/2016
                                                <p class="m-0 text-muted font-14">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="public/assets/images/users/avatar-5.jpg" alt="user-image" class="thumb-sm rounded-circle"/>
                                                Lasse C. Overgaard
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Payment expired</td>
                                            <td>
                                                $44,584
                                                <p class="m-0 text-muted font-14">Amount</p>
                                            </td>
                                            <td>
                                                7/11/2016
                                                <p class="m-0 text-muted font-14">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <img src="public/assets/images/users/avatar-6.jpg" alt="user-image" class="thumb-sm rounded-circle"/>
                                                Kasper S. Jessen
                                            </td>
                                            <td><i class="mdi mdi-checkbox-blank-circle text-success"></i> Confirm</td>
                                            <td>
                                                $8,844
                                                <p class="m-0 text-muted font-14">Amount</p>
                                            </td>
                                            <td>
                                                1/11/2016
                                                <p class="m-0 text-muted font-14">Date</p>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card m-b-20">
                            <div class="card-body">
                                <h4 class="mt-0 m-b-30 header-title">Latest Orders</h4>

                                <div class="table-responsive">
                                    <table class="table table-vertical mb-1">

                                        <tbody>
                                        <tr>
                                            <td>#12354781</td>
                                            <td>
                                                <img src="public/assets/images/products/1.jpg" alt="user-image" style="height: 46px;" class="mr-2" />
                                                Riverston Glass Chair
                                            </td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>
                                                $185
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#52140300</td>
                                            <td>
                                                <img src="public/assets/images/products/2.jpg" alt="user-image" style="height: 46px;" class="mr-2" />
                                                Shine Company Catalina
                                            </td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>
                                                $1,024
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#96254137</td>
                                            <td>
                                                <img src="public/assets/images/products/3.jpg" alt="user-image" style="height: 46px;" class="mr-2" />
                                                Trex Outdoor Furniture Cape
                                            </td>
                                            <td><span class="badge badge-pill badge-danger">Cancel</span></td>
                                            <td>
                                                $657
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#12365474</td>
                                            <td>
                                                <img src="public/assets/images/products/4.jpg" alt="user-image" style="height: 46px;" class="mr-2" />
                                                Oasis Bathroom Teak Corner
                                            </td>
                                            <td><span class="badge badge-pill badge-warning">Shipped</span></td>
                                            <td>
                                                $8451
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>#85214796</td>
                                            <td>
                                                <img src="public/assets/images/products/5.jpg" alt="user-image" style="height: 46px;" class="mr-2" />
                                                BeoPlay Speaker
                                            </td>
                                            <td><span class="badge badge-pill badge-success">Delivered</span></td>
                                            <td>
                                                $584
                                            </td>
                                            <td>
                                                5/12/2016
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-secondary btn-sm waves-effect">Edit</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
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

<!-- Peity chart JS -->
<script src="public/assets/plugins/peity-chart/jquery.peity.min.js"></script>
<!--C3 Chart-->
<script type="text/javascript" src="public/assets/plugins/d3/d3.min.js"></script>
<script type="text/javascript" src="public/assets/plugins/c3/c3.min.js"></script>
<!-- Jvector Map js -->
<script src="public/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="public/assets/plugins/jvectormap/gdp-data.js"></script>
<!-- KNOB JS -->
<script src="public/assets/plugins/jquery-knob/excanvas.js"></script>
<script src="public/assets/plugins/jquery-knob/jquery.knob.js"></script>
<!-- Page specific js -->
<script src="public/assets/pages/dashboard.js"></script>
<!-- App js -->
<script src="public/assets/js/app.js"></script>

    </body>
</html>