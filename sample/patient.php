<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Patient Dashboard</title>
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
    </style>

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="main-style-container" />
    <link href="assets/css/weavy.css" rel="stylesheet" type="text/css" />
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

                        <li class="side-nav-title side-nav-item">Navigation Panel</li>

                        <li class="side-nav-item mm-open">
                            <a href="javascript: void(0);" class="side-nav-link">
                                <i class="dripicons-meter"></i>
                                <span> Dashboards </span>
                            </a>
                            <ul class="side-nav-second-level mm-show" aria-expanded="false">
                                <li>
                                    
                                    <a href="../index.php">
                                    <i class="dripicons-meter"></i><span> Home </span></a>
                                </li>
                            </ul>
                            <ul class="side-nav-second-level mm-show" aria-expanded="false">
                                <li>
                                    
                                    <a href="../updateInfo.php">
                                    <i class="dripicons-meter"></i>
                                    <span> Update Patient Info </span></a>
                                </li>
                                <li>
                                    
                                    <a href="../updateInfo.php">
                                    <i class="dripicons-meter"></i>
                                    <span> Book an appointment </span>
                                </a><!--- Link not updated -->
                                </li>
                                <li>
                                    
                                    <a href="../volunteer.php">
                                    <i class="dripicons-meter"></i>
                                    <span> Volunteer Registration </span>
                                </a>
                                </li>
                                <li>
                                    
                                    <a href="../feedback.php">
                                    <i class="dripicons-meter"></i>
                                    <span> Feedback System </span>
                                </a>
                                </li>
                                 <li>
                                    
                                    <a href="../Bloodbank_registration.php">
                                    <i class="dripicons-meter"></i>
                                    <span> Donate Blood! </span>
                                </a>
                                     <!--- Link not updated -->
                                </li>
                                <li>
                                    
                                    <a href="../updateInfo.php">
                                    <i class="dripicons-meter"></i>
                                    <span> Emergency Assistance </span>
                                </a><!--- Link not updated -->
                                </li>
                                <li>
                                    
                                    <a href="../updateInfo.php">
                                    <i class="dripicons-meter"></i>
                                    <span> Donate to Charity! </span>
                                </a><!--- Link not updated -->
                                </li>
                            </ul>
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
        <!-- Content inside the Dashboard -->
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
                                    <div>
                                    <a href="../updateInfo.php"
                                        class="dropdown-item text-center text-primary notify-item notify-all">
                                        Click here to update patient Info
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
                                <!-- Connecting with azure health bot -->
                                <button class="nav-link dropdown-toggle arrow-none btn btn-link">
                                  <a href="cPzdsTjhnVM.sZ8SN5tZB8YhbaSeuF1Y1E-NBj91Cj7Zo_B0tmGPSYs">  <i class="dripicons-message noti-icon"></i></a>
                                </button>
                                    <!-- Containter for messenger -->
                             </li>
                            
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="assets/images/users/avatar-1.svg" alt="user-image"
                                            class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">
                                            <?php

                                            try {
                                                $conn = new PDO("sqlsrv:server = tcp:lifelineserver.database.windows.net,1433; Database = lifelinesqldb", "akhil", "Inevitables@123");
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            }
                                            catch (PDOException $e) {
                                                print("Error connecting to SQL Server.");
                                                die(print_r($e));
                                            }

                                            // SQL Server Extension Sample Code:
                                            $connectionInfo = array("UID" => "akhil", "pwd" => "Inevitables@123", "Database" => "lifelinesqldb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
                                            $serverName = "tcp:lifelineserver.database.windows.net,1433";
                                            $conn = sqlsrv_connect($serverName, $connectionInfo);
                                            $sql = "select name,phone from register where id= (select max(id) as id from register)";
                                            $stmt = sqlsrv_query( $conn, $sql );
                                            if( $stmt === false) {
                                                die( print_r( sqlsrv_errors(), true) );
                                            }

                                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

                                                echo $row['name']."<br />".$row['phone']."<br />";
                                            }

                                            sqlsrv_free_stmt( $stmt);

                                            ?>
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
                                        
                                        <li class="breadcrumb-item active">Patient Description</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">My Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">My full details</h4>
                                    <address class="mb-0 font-14 address-lg">
                                        <h4>
                                                                            <address class="mb-0 font-14 address-lg">
                                        <h4>
                                        <?php

                                            try {
                                                $conn = new PDO("sqlsrv:server = tcp:lifelineserver.database.windows.net,1433; Database = lifelinesqldb", "akhil", "Inevitables@123");
                                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                            }
                                            catch (PDOException $e) {
                                                print("Error connecting to SQL Server.");
                                                die(print_r($e));
                                            }

                                            // SQL Server Extension Sample Code:
                                            $connectionInfo = array("UID" => "akhil", "pwd" => "Inevitables@123", "Database" => "lifelinesqldb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
                                            $serverName = "tcp:lifelineserver.database.windows.net,1433";
                                            $conn = sqlsrv_connect($serverName, $connectionInfo);
                                            $sql = "select name,phone,age,address,hospital from register where id= (select max(id) as id from register)";
                                            $stmt = sqlsrv_query( $conn, $sql );
                                            if( $stmt === false) {
                                                die( print_r( sqlsrv_errors(), true) );
                                            }

                                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

                                                echo 'Name:'.$row['name']."<br /><br />".'Phone:'.$row['phone']."<br /><br />".'Age:'.$row['age']."<br /><br />".'Address:'.$row['address']."<br /><br />".'Hospital:'.$row['hospital']."<br /><br />";
                                            }

                                            sqlsrv_free_stmt( $stmt);

                                            ?>
                                        </h4>
                                
                                    </address>
                                        </h4>


                                        <!-- <br>Information: Chest Pain</br>
                                        <br>Diagonostic: CPR, Injection and move the patient to observation room.</br>
                                        <br>Initial Test done: ECG, Blood Pressure, Prescribed for lab test.</br> -->
                                
                                    </address>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Hospital Information</h4>

                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <p class="mb-2"><span class="font-weight-bold mr-2">Department List</span>
                                               </p>
                                            <p class="mb-2"><span class="font-weight-bold mr-2">Doctor List</span> </p>
                                            
                                            
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Diagonostic Information</h4>

                                    <ul class="list-unstyled mb-0">
                                        <li>
                                            <p class="mb-2"><span class="font-weight-bold mr-2">ECG: OK</span>
                                               </p>
                                            <p class="mb-2"><span class="font-weight-bold mr-2">Blood Pressure: 120/80mmHg</span> </p>
                                            <p class="mb-2"><span class="font-weight-bold mr-2">X-Ray: No need</span>
                                              </p>
                                            <p class="mb-2"><span class="font-weight-bold mr-2">Scan: No need</span> </p>
                                            <p class="mb-0"><span class="font-weight-bold mr-2">Lab Report: To be uploaded after analysis</span></p>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        
                        <!-- end col-->

                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card section-customer" data-customer-id="acme">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">My Medical Records</h4>

                                    <div id="weavy-files-container"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Bill</h4>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Grand Total :</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Lab Expense :</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>Farmacy expense : </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>Total :</th>
                                                    <th></th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="https://www.instamojo.com/@akhilmanil0" class=" header-title mb-3">
                                        <h1 class="text-overflow m-0"><button>Pay Securely<button></h1>
                                         </a>
                                    </div>
                                    <!-- end table-responsive -->

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card section-customer" data-customer-id="acme">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Information Hub</h4>

                                    <div id="weavy-files-container"></div>

                                </div>
                            </div>
                        </div>
                        <!-- end col --> 
                    </div>
                      <!-- end row -->                              

                </div>
                <!-- container -->

            </div>
            <!-- end of dashboard content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-md-block">
                                <span>© 2021 LifeLine. Developed by Team INEVITABLES. All Rights Reserved.   </span>
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
