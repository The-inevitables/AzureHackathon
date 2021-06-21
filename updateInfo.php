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
         <!-- <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
				  
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="active" href="sample/patient.php">Patient Dashboard</a></li>
                       
                        
                     </ul>
                  </div>
               </nav>
              
            </div>
         </div> -->
      
      
      <div id="service" class="services wow fadeIn">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="appointment-form">
                     <h3><span>+</span>Patient Information </h3>
                     <div class="form">
                        <form method="post" action="updatedb.php">
                           <fieldset>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="name" name="name" placeholder="Full Name"  />
                                       
                                    </div>
                                 </div>
                              </div>
                              

                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="number" id="phone"  name="phone" placeholder="phone"  />
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="number" id="age"  name="age" placeholder="age"  />
                                    </div>
                                 </div>
                              </div>

                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <input type="text" id="address" name="address" placeholder="Address"  />
                                       
                                    </div>
                                 </div>
                              </div>
                           
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 select-section">
                                 <div class="row">
                                 
                                    <div class="form-group">
                                    <!-- <label><br />State</label> -->
                                       <select data-target="secondList" class="firstList selectFilter" name="state">
                                       <option value="-1">State</option>
                                       <option data-ref="one" >Andra Pradesh</option>
                                       <option data-ref="two" >Delhi</option>
                                       <option data-ref="three">Karnataka</option>
                                       <option data-ref="four">Kerala</option>
                                       <option data-ref="five">Punjab</option>
                                       <option data-ref="six">Tamil Nadu</option>
                                       </select>
                                       <!-- <label><br />District</label> -->
                                       <select data-target="thirdList" class="secondList selectFilter" name="district">
                                       <option value="-1">District</option>
                                       <option data-ref="A" data-belong="four" >Alapuzha</option>
                                       <option data-ref="B" data-belong="four">Eranakulam</option>
                                       <option data-ref="C" data-belong="four">Idukki</option>
                                       <option data-ref="D" data-belong="four">Kannur</option>
                                       <option data-ref="E" data-belong="four">Kasaragod</option>
                                       <option data-ref="F" data-belong="four">Kottayam</option>
                                       <option data-ref="G" data-belong="four">Kollam</option>
                                       <option data-ref="H" data-belong="four">Kozhikode</option>
                                       <option data-ref="I" data-belong="four">Malappuram</option>
                                       <option data-ref="J" data-belong="four">Palakkad</option>
                                       <option data-ref="K" data-belong="four">Pathanamthitta</option>
                                       <option data-ref="L" data-belong="four">Trivandrum</option>
                                       <option data-ref="M" data-belong="four">Thrissur</option>
                                       <option data-ref="N" data-belong="four">Wayanad</option>
                                       
                                       
                                    </select>
                                    <!-- <label><br />Hospital</label> -->
                                       <select  class="thirdList selectFilter" name="hospital">
                                       <option value="-1">Hospitals</option>
                                          <option data-belong="A">Government Medical college Alapuzha</option>
                                          <option data-belong="B">Government Medical college Eranakulam</option>
                                          <option data-belong="C">Government Medical college Idukki</option>
                                          <option data-belong="D">Government Medical college Kannur</option>
                                          <option data-belong="E">Government Medical college Kasaragod</option>
                                          <option data-belong="F">Government Medical college Kottayam</option>
                                          <option data-belong="G">Government Medical college Kollam</option>
                                          <option data-belong="H">Government Medical college Kozhikode</option>
                                          <option data-belong="I">Government Medical college Malappuram</option>
                                          <option data-belong="J">Government Medical college Palakkad</option>
                                          <option data-belong="K">Government Medical college Pathanamthitta</option>
                                          <option data-belong="L">Government Medical college trivandrum</option>
                                          <option data-belong="M">Government Medical college Thrissur</option>
                                          <option data-belong="N">Government Medical college Wayanad</option>
                                          <option data-belong="F">Pushpagiri Medical college Hospital Thiruvalla</option>   
                                          <option data-belong="F">Mar sleeva Medi city Pala</option> 
                                          <option data-belong="F">Maryqueens Hospital Kanjirappally </option>  
                                          <option data-belong="B">Apollo Adlux Hospital Angamaly</option> 
                                          <option data-belong="B">VPS Lakeshore Hospital Kochi</option>                                  
                                        
                                       
                                       </select>
                                    </div>
                                 </div>
                              </div>
                                                        
                              
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <div class="row">
                                    <div class="form-group">
                                       <div class="center"><button type="submit">Update</button></div>
                                    </div>
                                 </div>
                              </div>
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
      
         <div class="container">
         
         
            <div class="row">
            
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
               
                  <div class="inner-services">

                  
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon1.png" alt="#" /></span>
                           <h4>PREMIUM FACILITIES</h4>
                           <p>Only the best facilities for the best treatment.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon2.png" alt="#" /></span>
                           <h4>LARGE LABORATORY</h4>
                           <p>A large laboratory for fast and efficient results.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon3.png" alt="#" /></span>
                           <h4>DETAILED SPECIALIST</h4>
                           <p>The best specialists all over the world is here.</p>
                        </div>
                        
                     </div>
                     
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon4.png" alt="#" /></span>
                           <h4>CHILDREN CARE CENTER</h4>
                           <p>High level industry standard care system dedicated for children.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon5.png" alt="#" /></span>
                           <h4>FINE INFRASTRUCTURE</h4>
                           <p>Eco-friendly infrasture.We make use of the renewable energy for a healthier future.</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="serv">
                           <span class="icon-service"><img src="images/service-icon6.png" alt="#" /></span>
                           <h4>ANYTIME BLOOD BANK</h4>
                           <p>24/7 bloodbank available.</p>
                           
                        </div>
                     </div>
                  </div>
               </div>

               </div>
            </div>
         </div>
      </div>
      <!-- end section -->
      
	  
	
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- all js files -->
      <script src="js/all.js"></script>
      <!-- all plugins -->
      <script src="js/custom.js"></script>
      <!-- map -->
     <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script> -->
      <!-- <script src="http://code.jquery.com/jquery.min.js"></script> -->
      <script src="js/selectFilter.min.js"></script>
   
   </body>
</html>
