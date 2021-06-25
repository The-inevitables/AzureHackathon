<!DOCTYPE html>
<html lang="en">
<!-- <script src="assets/js/weavysdk.js" id="weavy-client-script"></script>
      <script>var weavy = new Weavy();</script> -->
<head>
    <meta charset="utf-8" />
    <title>Hospital</title>
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
            #videoElement {
                width: 600px;
                height: 400px;
                background-color: #666;
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
                                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="assets/images/users/avatar-1.svg" alt="user-image"
                                            class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">Online Communication Service </span>
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
                                    <a href="patient.php" class="dropdown-item notify-item">
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
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Lifeline</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hospital</a></li>
                                        <li class="breadcrumb-item active">Emergency Service</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Lifeline Communication Services</h4>
                                    <input 
                                    id="callee-id-input"
                                    type="text"
                                    placeholder="Enter Your Name"
                                    style="margin-bottom:1em; width: 200px;"
                                    />
                                
                                    <div>
                                    <button id="call-button" type="button" disabled="true">
                                        start call
                                    </button>
                                        &nbsp;
                                    <button id="hang-up-button" type="button" disabled="true">
                                        hang up
                                    </button>
                                        &nbsp;
                                    <button id="start-Video" type="button" disabled="true">
                                        start video
                                    </button>
                                        &nbsp;
                                    <button id="stop-Video" type="button" disabled="true">
                                        stop video
                                    </button>     
                                    </div>
                                
                                    <div>Local Video</div>
                                    <div style="height:400px; width:600px; background-color:black; position:relative;">
                                      <!-- <div id="myVideo" style="background-color: black; position:absolute; top:50%; transform: translateY(-50%);">
                                      </div>      -->

                                      <video autoplay="true" id="videoElement">
	
                                    </video>
                                    <script>
                                        var video = document.querySelector("#videoElement");
                                    
                                    if (navigator.mediaDevices.getUserMedia) {
                                      navigator.mediaDevices.getUserMedia({ video: true })
                                        .then(function (stream) {
                                          video.srcObject = stream;
                                        })
                                        .catch(function (err0r) {
                                          console.log("Something went wrong!");
                                        });
                                    }
                                    
                                    </script>
                                    </div>


                                  
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    
                                      
                                    <h4 class="header-title">Doctor</h4>

                                    <div class="chart-widget-list">
                                        <br /><div>Remote Video</div><br /><br />
                                        <div style="height:420px; width:600px; background-color:grey; position:relative;"> 
                                          <div id="remoteVideo" style="background-color: black; position:absolute; top:50%; transform: translateY(-50%);">
                                          </div>
                                        </div>   
                                        
                                        
                                    </div>
                                </div>
                                <!-- end card-body-->
                            </div>
                            <!-- end card-->
                        </div>
                        <!-- end col-->

                    </div>
                    <!-- end row -->
                </div>




            </div>
            <!-- content -->







                    
                    
                
<script src="./bundle.js"></script>
                


                        

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