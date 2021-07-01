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
                                    
                                    <a href="../Emergency_assistance.php">
                                    <i class="dripicons-meter"></i>
                                    <span> Emergency Assistance </span>
                                </a>
                                </li>
                                <li>
                                    
                                    <a href="../charity.php">
                                    <i class="dripicons-meter"></i>
                                    <span> Donate to Charity! </span>
                                </a>
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

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="false" aria-expanded="false">
                                    <!-- <i class="dripicons-bell noti-icon"></i> -->
                                    <i class="dripicons-message noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

<!-- Chat Bot (Azure Health Bot) Integreted Within Patient Dashboard -->
                                    
                    <!-- code beginning for chat bot -->

                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-right">
                                                <a href="javascript: void(0);" class="text-dark">
                                                <div id="webchat" role="main"></div>   
                                                <script>

                                                (async function() {

                //  Note, for the simplicity of this example, we are fetching the DirectLine token here;
                //  however, it is recommended that you create a backend REST API to generate and manage 
                //  your tokens.
                                                    const res = await fetch('https://directline.botframework.com/v3/directline/tokens/generate', 
                                                    { 
                                                    method: 'POST',
                                                    headers: {
                                                        'Authorization': `Bearer cPzdsTjhnVM.sZ8SN5tZB8YhbaSeuF1Y1E-NBj91Cj7Zo_B0tmGPSYs`,
                                                        'Content-Type': 'application/json'
                                                    },
                                                    body: {
                                                        // The user id must start with `dl` and should be unique for each user.
                                                        User: { Id: 'dl_user_id' }
                                                    }
                                                    });
                                                    const { token } = await res.json();

                                                    window.WebChat.renderWebChat({
                                                    directLine: window.WebChat.createDirectLine({ token }),
                                                }, document.getElementById('webchat'));

                                                })().catch(err => console.log(err));

                                                </script>

                                                </a>
                                            </span>
                                        </h5>
                                    </div>
                                    <div>

                <!-- code end for chat bot -->
                                                                  

                                </div>
                                
                                
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

<!-- UserDetails PHP code which is added in the queries folder -->

                                            <?php

                                            include "../queries/user.php";

                                            ?>
<!-- UserDetails block end -->


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
                                        <h3>

<!-- Full Details PHP code which is added in the queries folder -->

                                        <?php

                                                include "../queries/fulldetails.php";

                                        ?>

<!-- Full details PHP code end -->

                                        </h3>
                                
                                    </address>
                                        </h4>
                                
                                                                      

                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Hospital Information</h4><h3>

<!-- Hospital Details PHP code which is added in the queries folder -->

                                    <?php

                                    include "../queries/hospitaldetails.php";        

                                    ?>
<!-- Hospital details PHP code end -->

                                            </h3>
                                    </div>
                                 </div>
                              
                            
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Online Medi Assistance</h4>
                                    <h3>
                                    <ul class="list-unstyled mb-0">
                                        <li>
                                        
                                        <select data-target="forthList" class="thirdList selectFilter" name="hospital">
                                       <option value="-1">Hospitals</option>
                                          <option data-ref="AA">GOVERNMENT T.D. Medical College</option>
                                          <option data-ref="BB">Government Medical College Eranakulam</option>
                                          <option data-ref="CC">Government Medical College Idukki</option>
                                          <option data-ref="DD">Government Medical College Kannur</option>
                                          <option data-ref="EE">Government Medical College Kasaragod</option>
                                          <option data-ref="FF">Government Medical College Kottayam</option>
                                          <option data-ref="GG">Government Medical College Kollam</option>
                                          <option data-ref="HH">Government Medical College Kozhikode</option>
                                          <option data-ref="II">Government Medical College Malappuram</option>
                                          <option data-ref="JJ">Government Medical College Palakkad</option>
                                          <option data-ref="KK">Government Medical College Pathanamthitta</option>
                                          <option data-ref="LL">Government Medical College Trivandrum</option>
                                          <option data-ref="MM">Government Medical College Thrissur</option>
                                          <option data-ref="NN">Government Medical College Wayanad</option>
                                          <option data-ref="FF">Pushpagiri Medical College Thiruvalla</option>   
                                          <option data-ref="FF">Mar sleeva Medicity, Pala</option> 
                                          <option data-ref="FF">Maryqueens Hospital, Kanjirappally </option>  
                                          <option data-ref="BB">Apollo Adlux Hospital, Angamaly</option> 
                                          <option data-ref="BB">VPS Lakeshore Hospital, Kochi</option>                         
                                        
                                       
                                       </select><br />

                                       <select data-target="fifthList" class="forthList selectFilter" name="department">
                                       <option value="-1">Department</option>
                                          <option data-ref="AAA" data-belong="AA">Cardiology</option>
                                          <option data-ref="BBB" data-belong="BB">Pulmonology</option>
                                          <option data-ref="CCC" data-belong="BB">Neurology</option>
                                          <option data-ref="DDD" data-belong="DD">Orthopedic</option>
                                          <option data-ref="EEE" data-belong="FF">Cardiology</option>
                                          <option data-ref="FFF" data-belong="FF">Pulmonology</option>
                                          <option data-ref="GGG" data-belong="FF">Neurology</option>
                                          <option data-ref="HHH" data-belong="LL">Cardiology</option>
                                          <option data-ref="III" data-belong="MM">Pulmonology</option>
                                          <option data-ref="JJJ" data-belong="NN">Cardiology</option>
                                          <option data-ref="KKK" data-belong="PP">Neurology</option>
                                          <option data-ref="LLL" data-belong="OO">Cardiology</option>
                                          <option data-ref="MMM" data-belong="QQ">Orthopedic</option>
                                          <option data-ref="NNN" data-belong="RR">Pulmonology</option>
                                          <option data-ref="OOO" data-belong="SS">Orthopedic</option>   
                                          <option data-ref="PPP" data-belong="CC">Neurology</option> 
                                          <option data-ref="QQQ" data-belong="EE">Cardiology </option>  
                                          <option data-ref="RRR" data-belong="GG">Neurology</option> 
                                          <option data-ref="SSS" data-belong="II">Orthopedic</option>                                  
                                        
                                       
                                       </select><br />
                                       <form method="post" action="mediassistance.php">
                                       <select class="fifthList selectFilter" name="doctor">
                                       <option value="-1">Doctor</option>
                                          <option data-belong="AAA">Dr. Rejin Joseph</option>
                                          <option data-belong="BBB">Dr. Benjamin louis</option>
                                          <option data-belong="CCC">Dr. Gireesh Nair</option>
                                          <option data-belong="DDD">Dr. Maneesh K</option>
                                          <option data-belong="EEE">Dr. Aswathy Iyer</option>
                                          <option data-belong="FFF">Dr. Ashik Kumar</option>
                                          <option data-belong="GGG">Dr. John Mathew</option>
                                          <option data-belong="HHH">Dr. Akash Joseph</option>
                                          <option data-belong="III">Dr. Raman Kartha</option>
                                          <option data-belong="JJJ">Dr. Daisy George</option>
                                          <option data-belong="KKK">Dr. Arathy Prathap</option>
                                          <option data-belong="LLL">Dr. Nimisha Iqbal</option>
                                          <option data-belong="MMM">Dr. Anjaly B</option>
                                          <option data-belong="NNN">Dr. Arya Anil</option>
                                          <option data-belong="OOO">Dr. Rahul Rajesh</option>   
                                          <option data-belong="PPP">Dr. Aravind B</option> 
                                          <option data-belong="QQQ">Dr. Jose John </option>  
                                          <option data-belong="RRR">Dr. Sujith Kumar</option> 
                                          <option data-belong="SSS">Dr. Alen Abraham</option>                                  
                                        
                                       
                                       </select><br /><br />
                                        <button type= submit>Make A call</button>
                                        </form>
                                        </li>
                                    </ul>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                        
                        <!-- end col-->

                    </div>
                    <!-- end row -->

<!-- Upload Previous Medical Records HTML code beginning -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card section-customer" data-customer-id="acme">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Upload Previous Medical Records</h4>

                                    <div class="container">
                                    <div class="row">
                                        <form action="patient.php" method="post" enctype="multipart/form-data" >
                                        
                                        <input type="file" name="myfile"> 
                                        <button type="submit" name="save">upload</button>
                                        </form>
                                    </div>
                                    </div>

                                </div>
                            </div>
                        </div>
<!-- Upload Previous Medical Records HTML code end -->

<!-- Information hub HTML code beginning  -->

                        <div class="col-lg-8">
                            <div class="card section-customer" data-customer-id="acme">
                                <div class="card-body">
                                    <h4 class="header-title mb-3">Information Hub</h4>

                                    <img src="../images/covid 2.jpg" width="400" height="400">
                                    <img src="../images/covid 1.jpg" width="400" height="400">

                                </div>
                            </div>
                        </div>

<!-- Information hub HTML code end -->

                    </div>

<!-- Bill Payemnt HTML code beginning   -->

                      <div class="row">
                        <div class="col-lg-8">
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
                                        <a href="https://www.instamojo.com/@akhilmanil0" class=" header-title mb-3"><h3>Pay Securely</h3>
                                        
                                         </a>
                                    </div>
                                    <!-- end table-responsive -->

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

<!-- Bill Payemnt HTML code end -->

                                         

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
    <script src="https://cdn.botframework.com/botframework-webchat/master/webchat.js"></script>
    <script src="../js/selectFilter.min.js"></script>

    



    <!-- third party js -->
    <script src="assets/js/vendor/jsrsasign-all-min.js"></script>
    <script src="assets/js/vendor/Chart.bundle.min.js"></script>
    <!-- third party js ends -->

</body>

</html>
