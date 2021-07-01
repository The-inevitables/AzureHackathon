<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- inline style to handle loading of various element-->
    <style>
        body.loading {
            visibility: hidden;
        }
        table, th, td {
        border: 2px solid black;        
            }
        table {
             width: 100%;
            }
    </style>

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="main-style-container" />
    
    
</head>

<body class="loading">
    <div id="detached-topbar-placeholder"></div>
    <!-- Begin page -->
    <div class="wrapper">

        <div id="vertical-sidebar-placeholder">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu" id="left-side-menu-container">

                    <!--- Sidemenu -->
                    <ul class="metismenu side-nav pt-4">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item mm-open">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> Dashboards </span>
                            </a>
                            <ul class="side-nav-second-level mm-show" aria-expanded="false">
                                <li>
                                    <a href="../index.php">Home</a>
                                </li>
                            </ul>
                        </li>

                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link mm-active">
                                <i class="dripicons-copy"></i>
                                <span> Reservation Status </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link mm-active">
                                <i class="dripicons-copy"></i>
                                <span> In patient Details </span>
                            </a>
                        </li>
                            
                        
                    </ul>

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
        </div>
        <div id="detached-sidebar-placeholder"></div>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->


        <div class="content-page">
            <div class="content">

                <div id="vertical-topbar-placeholder">
<!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="notification-list topbar-dropdown d-lg-block">
                                <button class="nav-link dropdown-toggle arrow-none btn btn-link">
                                    <i class="dripicons-gear noti-icon"></i>
                                </button>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                        </h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">New patient reservation
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">Feed Added
                                                <small class="text-muted">3 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">New patient reservation
                                                <small class="text-muted">4 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">Operation Remainder
                                                
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);"
                                        class="dropdown-item text-center text-primary notify-item notify-all">
                                        View All
                                    </a>

                                </div>
                            </li>

                            <li class="notification-list topbar-dropdown d-lg-block toggle-messenger">
                                <button class="nav-link dropdown-toggle arrow-none btn btn-link">
                                    <i class="dripicons-message noti-icon"></i>
                                </button>

                            </li>
                            
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="assets/images/users/avatar-1.svg" alt="user-image"
                                            class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">ADMIN </span>
                                        <span class="account-position">Lifeline</span>
                                         
                                        
                                    </span>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle mr-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit mr-1"></i>
                                        <span>Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lifebuoy mr-1"></i>
                                        <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-lock-outline mr-1"></i>
                                        <span>Lock Screen</span>
                                    </a>

                                    <!-- item-->
                                    <a href="../index.php" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout mr-1"></i>
                                        <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left disable-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="mdi mdi-magnify"></span>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
<!-- end Topbar -->

                </div>
                <div id="horizontal-topbar-placeholder"></div>

<!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Lifeline</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                        <li class="breadcrumb-item active">Patient Details</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Patient</h4>
                            </div>
                        </div>
                    </div>
<!-- end page title -->

<!-- Reservation Status HTML block beginning -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Reservation Status</h4>                                                                    
                                    <address class="mb-0 font-14 address-lg">
                                    <div>
                                     
                                    <table>
                                    <tr>
                                    <th><h3>ID</h3></th>
                                    <th><h3>Name</h3></th>
                                    <th><h3>Hospital</h3></th>
                                    </tr>

                                   
                                    </h3> 
                                    <h4> 

                <!-- Reservation Status PHP code which is added in the queries folder -->

                                    <?php
                                         
                                         include "../queries/reservationstatus.php";                                            

                                    ?>

                <!-- Reservation Status Block End -->

                                        </h4>
                                        </table> 
                                        </div>
                                        
                                    </address>

                                  
                                    
                                </div>
                            </div>
                        </div>

<!-- Reservation Status HTML block ending -->

<!-- Impatient Status HTML block beginning -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Inpatient Status</h4>

                                    <address class="mb-0 font-14 address-lg">
                                        <br>Meera satheesh</br>
                                        <br>Amrutha Jith</br>
                                        <br>Feba John</br>
                                        <br>Seena Thomas</br>
                                        <br>Venugopal</br>
                                        <br>Vani Ashok</br>
                                        
                                    </address>


                                </div>
                            </div>
                        </div>

<!-- Impatient Status HTML block ending -->

<!-- No. of pateints HTML block beginning -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                      
                                    <h4 class="header-title">No. of patients</h4>

                                    <div class="chart-widget-list">
                                        <p>
                                            <i class="mdi mdi-square text-primary"></i> Out Patient
                                            <span class="float-right">

                                <!-- Count PHP code which is added in the queries folder -->

                                            <?php

                                            include "../queries/count.php";                                            

                                            ?>

                                <!-- Count Block end -->
                                
                                            </span>
                                        </p>
                                        <p>
                                            <i class="mdi mdi-square text-success"></i> In Patient
                                            <span class="float-right">6</span>
                                        </p>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <!-- end col-->

                    </div>
                   
<!-- No. of pateints HTML block ending -->

<!-- Hospital Status HTML block beginning -->
                   
                   <div class="row">
                        <div class="col-lg-8">
                            <div class="card section-customer" data-customer-id="acme">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Hospital Status</h4>
                                    <form method="post" action="display.php">
                                        <div>
                                            <select name= "status">
                                            <option value="-1">Hospital</option>

                            <!-- Fetching Hospital name PHP code which is added in the queries folder -->

                                                <?php
                                                include "../queries/hospitalname.php";

                                                    

                                                ?>
                            <!-- Hospital name block end -->

                                            </select>                                           

                                        </div>
                                    <button type="submit">Submit</button>


                                </div>
                            </div>
                        </div>
                   
                    
                        <!-- end col -->

                        
<!-- Hospital Status HTML block ending -->
                    </div>                   


                </div>
              
            </div>
            <!-- content -->

<!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-md-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
<!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->




    <!-- Right Sidebar -->
    <div class="right-bar">
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /Right-bar -->

    

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <!-- third party js -->
    <script src="assets/js/vendor/jsrsasign-all-min.js"></script>
    <script src="assets/js/vendor/Chart.bundle.min.js"></script>
    <!-- third party js ends -->

</body>

</html>