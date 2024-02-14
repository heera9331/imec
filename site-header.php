<header id="topnav">
    <div class="topbar-main">
        <div class="container-fluid">
            <!-- Logo container-->
            <div class="logo">
                <a href="index.php" class="logo">
                  <?php echo $siteName; ?>
                    <!--
      <img src="assets/images/logo-sm.png" alt="" height="30">
      -->
                </a>

            </div>
            <!-- End Logo container-->


            <div class="menu-extras topbar-custom">
                <ul class="list-inline float-right mb-0">


                    <!-- Fullscreen -->
                    <li class="list-inline-item dropdown notification-list hide-phone">
                        <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                            <i class="mdi mdi-fullscreen noti-icon"></i>
                        </a>
                    </li>


                    <!-- User-->

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown"
                           href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <a class="dropdown-item" href="profile.php"><i class="dripicons-user text-muted"></i>
                                Profile</a>
                            <a class="dropdown-item" href="logout.php"><i class="dripicons-exit text-muted"></i> Logout</a>
                        </div>
                    </li>

                    <li class="menu-item list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>

                </ul>
            </div>
            <!-- end menu-extras -->

            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="index.php"><i class="mdi mdi-view-dashboard"></i>Home</a>
                    </li>

                    <li class="has-submenu">
                        <a href="events.php"><i class="mdi mdi-view-dashboard"></i>Events</a>
                        <!-- <ul class="submenu">
                        <li><a href="admin-manage-stock-transactions.php?type=1">Purchase</a></li>
                        <li><a href="admin-manage-stock-transactions.php?type=2">Sales</a></li>
                        </ul> -->
                    </li>


                    <li class="has-submenu">
                        <a href="jobs.php"><i class="mdi mdi-view-dashboard"></i>Jobs</a>
                        <!-- <ul class="submenu">
                            <li><a href="admin-manage-users.php">Users Login</a></li>
                            <li><a href="admin-manage-accounts.php">Accounts</a></li>
                            <li><a href="admin-manage-options.php?type=idtype">ID Card Type</a></li>
                            <li><a href="admin-manage-options.php?type=brand">Brands</a></li>
                        </ul> -->
                    </li>

                    <li class="has-submenu">
                        <!-- shows the updates for student like job applications short listed status and events approval -->
                        <a href="updates.php"><i class="mdi mdi-view-dashboard"></i>Updates</a>

                    </li>

                    <li class="has-submenu">
                        <a href="resume.php"><i class="mdi mdi-view-dashboard"></i>Resume</a>
                    </li>

                    <li class="has-submenu">
                        <a href="./update-profile.php"><i class="mdi mdi-view-dashboard"></i>Update Profile</a>
                    </li>
                    <li class="menu">
                        <a href="./update-result.php"><i class="mdi mdi-view-dashboard"></i>Result</a>
                    </li>


                    <li>
                        <a href="logout.php"><i class="mdi mdi-logout"></i>Logout</a>
                    </li>

                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>