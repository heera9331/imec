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
                                    <li class="breadcrumb-item active">Customers</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Customers</h4>
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
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Wallet Balance</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Herbert C. Patton</td>
                                        <td>herbart@admiria.com</td>
                                        <td>801-388-6508</td>
                                        <td>2470 Grove Street
                                            Bethpage, NY 11714</td>
                                        <td>$5,412</td>
                                        <td>July 20, 2017</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Fabian M. Berryhill</td>
                                        <td>FabianMBerryhill@teleworm.us</td>
                                        <td>518-281-2680</td>
                                        <td>
                                            North Greenbush, NY 12144</td>
                                        <td>$2,510</td>
                                        <td>June 20, 2017</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Edward E. White</td>
                                        <td>EdwardEWhite@armyspy.com</td>
                                        <td>850-561-1648</td>
                                        <td>1246 Drainer Avenue
                                            Tallahassee, FL 32301</td>
                                        <td>$1,854</td>
                                        <td>June 22, 2017</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Rodney V. Deshong</td>
                                        <td>RodneyVDeshong@teleworm.us</td>
                                        <td>678-737-9078</td>
                                        <td>4318 Kuhl Avenue
                                            Woodstock, GA 30188</td>
                                        <td>$8,512</td>
                                        <td>April 12, 2017</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Ronald R. Maher</td>
                                        <td>RonaldRMaher@armyspy.com</td>
                                        <td>949-718-5315</td>
                                        <td>3894 Elk Street
                                            Newport Beach, CA 92660</td>
                                        <td>$7,541</td>
                                        <td>June 11, 2017</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Chris T. Parks</td>
                                        <td>ChrisTParks@rhyta.com</td>
                                        <td>407-855-7376</td>
                                        <td>1521 McDonald Avenue
                                            Orlando, FL 32809</td>
                                        <td>$6,541</td>
                                        <td>March 20, 2017</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Mario M. Sloan</td>
                                        <td>MarioMSloan@rhyta.com</td>
                                        <td>224-585-9508</td>
                                        <td>4733 Victoria Street
                                            Chicago, IL 60606</td>
                                        <td>$9,650</td>
                                        <td>June 15, 2017</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Tosha T. Rivera</td>
                                        <td>ToshaTRivera@teleworm.us</td>
                                        <td>573-426-7916</td>
                                        <td>547 Maple Court
                                            Rolla, MO 65401</td>
                                        <td>$2,510</td>
                                        <td>April 02, 2017</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Alice B. Bevill</td>
                                        <td>JamesMHenry@dayrep.com</td>
                                        <td>732-533-0201</td>
                                        <td>2231 Webster Street
                                            Newark, NJ 07102</td>
                                        <td>$4,358</td>
                                        <td>June 16, 2017</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Stanley I. Thurman</td>
                                        <td>StanleyIThurman@teleworm.us</td>
                                        <td>501-320-9300</td>
                                        <td>2306 Mulberry Avenue
                                            Little Rock, AR 72211</td>
                                        <td>$7,410</td>
                                        <td>November 21, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Betty M. Housley</td>
                                        <td>BettyMHousley@armyspy.com</td>
                                        <td>435-261-6681</td>
                                        <td>424 North Street
                                            Salt Lake City, UT 84104</td>
                                        <td>$11,751</td>
                                        <td>Jun 20, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Essie A. Nixon</td>
                                        <td>EssieANixon@dayrep.com</td>
                                        <td>269-639-7228</td>
                                        <td>2259 Goff Avenue
                                            South Haven, MI 49090</td>
                                        <td>$4,456</td>
                                        <td>June 22, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>John K. Sturdivant</td>
                                        <td>JohnKSturdivant@rhyta.com</td>
                                        <td>713-761-6484</td>
                                        <td>4494 Michael Street
                                            Sugar Land, TX 77478</td>
                                        <td>$6,547</td>
                                        <td>April 03, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Betty M. Litwin</td>
                                        <td>BettyMLitwin@rhyta.com</td>
                                        <td>903-457-6202</td>
                                        <td>2317 Florence Street
                                            Greenville, TX 75401</td>
                                        <td>$956</td>
                                        <td>March 05, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>John T. Gonzalez</td>
                                        <td>JohnTGonzalez@armyspy.com</td>
                                        <td>610-594-6480</td>
                                        <td>1528 Jody Road
                                            Exton, PA 19341</td>
                                        <td>$1,121</td>
                                        <td>June 16, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Shirley F. Chen</td>
                                        <td>ShirleyFChen@rhyta.com</td>
                                        <td>401-841-7122</td>
                                        <td>2792 Bond Street
                                            Newport, RI 02840</td>
                                        <td>$12,841</td>
                                        <td>December 22, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Sheri D. Thompson</td>
                                        <td>SheriDThompson@teleworm.us</td>
                                        <td>928-598-1216</td>
                                        <td>252 Skips Lane
                                            Tucson, AZ 85701</td>
                                        <td>$2,510</td>
                                        <td>March 17, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Rufina J. Bordeaux</td>
                                        <td>RufinaJBordeaux@teleworm.us</td>
                                        <td>573-736-9383</td>
                                        <td>1243 John Daniel Drive
                                            Crocker, MO 65452</td>
                                        <td>$1,123</td>
                                        <td>November 29, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Geneva J. Silverstein</td>
                                        <td>GenevaJSilverstein@dayrep.com</td>
                                        <td>507-406-9467</td>
                                        <td>3421 Pritchard Court
                                            Owatonna, MN 55060</td>
                                        <td>$5,943</td>
                                        <td>October 19, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Ronnie A. Slayden</td>
                                        <td>RonnieASlayden@teleworm.us</td>
                                        <td>845-231-7995</td>
                                        <td>848 Camden Place
                                            Poughkeepsie, NY 12601</td>
                                        <td>$2,269</td>
                                        <td>June 02, 2016</td>
                                        <td>
                                            <a href="javascript:void(0);" class="m-r-15 text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-18"></i></a>
                                            <a href="javascript:void(0);" class="text-muted" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-18"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>James M. Henry</td>
                                        <td>JamesMHenry@dayrep.com</td>
                                        <td>951-314-6794</td>
                                        <td>3049 Denver Avenue
                                            City Of Commerce, CA 90040</td>
                                        <td>$2,490</td>
                                        <td>January 17, 2017</td>
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