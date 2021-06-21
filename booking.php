<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Life Line</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="images/fevicon.ico.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://localhost:44323/javascript/weavy.min.js"></script>
   <script>var weavy = new Weavy();</script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
      <div class="header-top wow fadeIn">
            <div class="container">
               <a class="navbar-brand" href="index.php"><img src="images/logo1.png" alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="tel:800 123 456">+914828-224042</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@Lifeline.com</a></span>	
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">Daily: 7:00am - 8:00pm</a></span>	
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
      <div class="container">
               <div class="col-md-6">
                  <div class="message-box">
                     <h2>Thank you!</h2>
                     
                     <p class="lead"><h3>Your appoinment is booked.</h3>
                     <h2> Details Provided </h2>
                     <h3>
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
                                            $sql = "select name,phone,hospital from register where id= (select max(id) as id from register)";
                                            $stmt = sqlsrv_query( $conn, $sql );
                                            if( $stmt === false) {
                                                die( print_r( sqlsrv_errors(), true) );
                                            }

                                            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

                                                echo 'Name:'.$row['name']."<br /><br />".'Phone:'.$row['phone']."<br /><br />".'Hospital:'.$row['hospital']."<br /><br />";
                                            }

                                            sqlsrv_free_stmt( $stmt);

                                            ?>
                                            </h3>
                     
                     </p>                     
                     
                     <a href="index.php" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">HOME</a>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               
               <!-- end col -->
      </div>

      
     










    
	  
	
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
   </body>
</html>
