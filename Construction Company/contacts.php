<?php

$msg='';
if (isset($_POST['submit'])){

    require_once 'vendor/autoload.php';
    require_once 'infor.php';

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
      ->setUsername(EMAIL)
      ->setPassword(PASS)
    ;
    
    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
    
    // Create a message
    $message = (new Swift_Message('New Inquiry From the Website'))
      ->setFrom([EMAIL => 'RIPANA Contractors and Designers Ltd'])
      ->setTo(['smuriukih@gmail.com'])
      ->setBody('Name: '.$_POST['firstname'].' &nbsp; '.$_POST['lastname'] .
     '<br> Email: '.' &nbsp; '.$_POST['email'] . '<br> Subject: '.' &nbsp; '.$_POST['subject']
      . '<br> Message: '.' &nbsp; '.$_POST['message'], 
      'text/html')
      ;
    
    // Send the message
    $result = $mailer->send($message);

    if(!$result){

        $msg='<div class="alert alert-danger text-center">

        Something went Wrong! Please Try again
        </div>';

    }
    else{

        $msg='<div class="alert alert-success text-center">

        Message Sent Successfully! Our Team will contact you soon
        </div>';
    }


}




?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ripana Contractors & Designers Ltd Contacts</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="vendors/owl_carousel/owl.carousel.css" media="all">

    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />

    

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->


    <script src="gen_validatorv4.js" type="text/javascript"></script>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->

      
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <section class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>+254 724 611299</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>ripanadesigner@gmail.com</a></li>
                <li><a href="#"><i class="fa fa-clock-o"></i>Mon - Sat 08:00 am - 18:00 pm</a></li>
                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Slopes-Plaza,Wambora-Street,Embu Town</span></a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="https://www.facebook.com/ripanacontractors/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               
            </ul>
	    </div>
	</section>

    
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.html"><img src="images/head.png" alt=""></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="home.html">Home</a></li>
                             <!--  <li><a href="index-2.html">Home 2</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us</a>
                            <ul class="dropdown-menu other_dropdwn">
                                <li><a href="about.php">About Us</a></li>
                              <!--  <li><a href="about-2.html">About Us-2</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services</a>
                            <ul class="dropdown-menu other_dropdwn">
                                <li><a href="architecture.php">Architectural and Structural Design and Development</a></li>
                                <li><a href="consultancy.php">Engineering Consultancy</a></li>
                                <li><a href="hire.php">Construction Machines and Tools Hire</a></li>
                                <li><a href="building.php">Building Construction</a></li>
                                <li><a href="refurbishment.php">Building Refurbishment</a></li>
                                <li><a href="contracting.php">Contracting Services</a></li>
                                <li><a href="building-material-supplies-in-kenya.php">Building Material Supplies</a></li>
                               
                                
                                
                              
                            </ul>
                        </li>
                        <li><a href="machines.php">Machines for Hire</a></li>

                        <li><a href="gallery.php">Gallery</a></li>
                       
                        </li>-->
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>

                    
	<!-- End Header_Area -->

    <script type="text/javascript">

  

             
    alert ("Your message has successfuly been sent. Our team will contact you soon");

</script>

    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Ripana Contractors & Designers Ltd</h2>
        <ol class="breadcrumb">
            <li><a href="home.html">Home</a></li>
            <li><a href="#" class="active">Contact Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    
    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <p>
                    For any inquiries concerning subcontracting us, our current project, hiring our machines or even
                our location, kindly use the contacts below to call us or write an email
                 to us and we will get back to you. Else,
                 you can fill the form below so that we can connect you to one of our staff for more details.</p>
                    <div class="location">
                        <div class="location_laft">
                         <a class="f_location" href="#"> <b> main <br/> office </b></a>
                            <a href="#">    </i><b>Chuka <br/> Office </b></a>
                            <a href="#"><b>Mwea <br/> Office</b></a><br>
                            <a href="#">    </i><b>email</b></a>
                        </div>
                        <div class="address">
                            <a href="#">  EMBU Town</a>
                           <a href="#"></i>+254 724 611299 or +254 740 634 777</a> <br/> 

                           <a href="#">Chuka Office </a>
                           <a href="#"></i>+254 724 611 299</a> <br> 

                           

                           <a href="#">Mwea Office  </a>
                           <a href="#"></i>+254 740 634 800</a><br>
                          
                            <a href="#"></i> ripanadesigner@gmail.com</a>
                        </div>
                    </div>
                </div>

                
                <div class="col-sm-6 contact_info send_message">
                    <h2>Send Us a Message</h2>

                    <p></p>
                    <div><?= $msg ?></div>
                    
                    <form  class="form-inline contact_box" name="contactform" id="contactform"   action="contactprocess.php" method="post">
                        <label>First Name:</label>
                        <input type="text" class="form-control input_box" placeholder="First Name *" id= "firstname" name="firstname">
                        <label>Last Name:</label>
                        <input type="text" class="form-control input_box" placeholder="Last Name *" id="lastname" name="lastname">
                        
                       
                        <label>Email:</label>
                        <input type="email" class="form-control input_box" placeholder="Your Email *" id="email" name="email">
                        <label>Subject:</label>
                        <input type="text" class="form-control input_box" placeholder="Subject" id="subject" name="subject">
                        <label>Message:</label>
                        <textarea class="form-control input_box" placeholder="Message" id="message" name="message"></textarea>
                
                        <button type="submit" class="btn btn-default" id="submit" name="submit" value="" onclick="return contact_check();">Send Message</button>
                       
                    </form>
                    <script>
                        function contact_check()
                        {
                            if(document.getElementById("firstname").value.split(" ").join("")=="")
                            {
                                alert("Please Enter Your First Name.");
                                document.getElementById("firstname").focus();
                                return false;
                            }
                            if(document.getElementById("lastname").value.split(" ").join("")=="")
                            {
                                alert("Please Enter Your Last Name.");
                                document.getElementById("lastname").focus();
                                return false;
                            }
                            
                            if(document.getElementById("email").value.split(" ").join("") == "")
                            {
                                alert("Please Enter Email.");
                                document.getElementById("email").focus();
                                return false;
                            }
                            else
                            {
                                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                                if(emailPattern.test(document.getElementById('email').value)==false)
                                {
                                    alert("Please enter valid Email address.");
                                    document.getElementById('email').focus();
                                    return false;
                                }
                            }
                            
                            if(document.getElementById("subject").value.split(" ").join("")=="")
                            {
                                alert("Please Enter the Subject for your Message.");
                                document.getElementById("subject").focus();
                                return false;
                            }

                            if(document.getElementById("message").value.split(" ").join("")=="")
                            {
                                alert("The Message cannot be empty.");
                                document.getElementById("message").focus();
                                return false;
                            }
                           
                           
                           
                        }
                    </script>

                </div>
            </div>
        </div>
    </section>

    
    <!-- End All contact Info -->
    <!-- Map -->
    <!--<div class="contact_map">
        <iframe src="https://wego.here.com/directions/mix//Ripana-Contractors-Designers,-Slopes-Plaza,-Wambora-Street,-Embu:e-eyJuYW1lIjoiUmlwYW5hIENvbnRyYWN0b3JzICYgRGVzaWduZXJzIiwiYWRkcmVzcyI6IlNsb3BlcyBQbGF6YSwgV2FtYm9yYSBTdHJlZXQsIEVtYnUsIEtlbnlhIiwibGF0aXR1ZGUiOi0wLjUzMzMzMywibG9uZ2l0dWRlIjozNy40NSwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjo0ODgwNTA2MTgyNDQ0MDN9?map=-0.53333,37.45,15,normal&fb_locale=en_US"></iframe>
    </div>
     End Map -->


    <!-- Footer Area -->
    <footer class="footer_area">
        <div class="container">
            <div class="footer_row row">
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>ABOUT OUR COMPANY</h2>
                    <img src="images/foot.jpg" alt="">
                    <p>RIPANA Contractors and Designers Ltd is a leading construction company that prides itself at providing high quality, professional engineering solutions to its  customers at a reasonable cost</p>
                    <ul class="socail_icon">
                        <li><a href="https://www.facebook.com/ripanacontractors/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>--> 
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about quick">
                    <h2>Our Services</h2>
                    <ul class="quick_link">
                        <li><a href="building.php"><i class="fa fa-chevron-right"></i>Building Construction</a></li>
                        <li><a href="refurbishment.php"><i class="fa fa-chevron-right"></i>Building Refurbishment</a></li>
                        <li><a href="consultancy.php"><i class="fa fa-chevron-right"></i>Consultancy Services</a></li>
                        <li><a href="contracting.php"><i class="fa fa-chevron-right"></i>Contracting</a></li>
                        <li><a href="hire.php"><i class="fa fa-chevron-right"></i>Building Machines and Tools for Hire</a></li>
                        <li><a href="architecture.php"><i class="fa fa-chevron-right"></i>Architectural and Structural Services</a></li>
                        <li><a href="consultancy.php"><i class="fa fa-chevron-right"></i>NEMA Reports and NCA Approvals </a></li>
                        <li><a href="hire.php"><i class="fa fa-chevron-right"></i>Slab Casting implements</a></li>
                        <li><a href="building-material-supplies-in-kenya.php"><i class="fa fa-chevron-right"></i>Building Material Supplies</a></li>
                        
                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>Vision</h2>
                    <a href="#" class="Machinery"><b>To be a 
                        trusted and renowned provider of high quality and affordable building solutions in Kenya and beyond </b><br/></a>
                    <br/> <h2>Mission</h2>
                        <a href="#" class="Machinery"><b>To provide high quality, 
                            professional, engineering solutions beyond our clients expectations 
                            and to grow in tandem with our stakeholders  </b> </a>
                    
                </div>
               
                <div class="col-md-3 col-sm-6 footer_about">
                    <h2>CONTACT US</h2>
                    <address>
                        <p>Have questions, comments or just want to say hello:</p>
                        <ul class="my_address">
                            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>ripanadesigner@gmail.com</a></li>
                            <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+254 724 611 299 or +254 740 634 777</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Slopes-Plaza,Wambora-Street,Embu Town</span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            Copyright 2020 All rights reserved. Designed by <a href="https://tidesolutions.com">Tide Solutions.</a>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Animate JS -->
    <script src="vendors/animate/wow.min.js"></script>
    <!-- Camera Slider -->
    <script src="vendors/camera-slider/jquery.easing.1.3.js"></script>
    <script src="vendors/camera-slider/camera.min.js"></script>
    <!-- Isotope JS -->
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <!-- Progress JS -->
    <script src="vendors/Counter-Up/jquery.counterup.min.js"></script>
    <script src="vendors/Counter-Up/waypoints.min.js"></script>
    <!-- Owlcarousel JS -->
    <script src="vendors/owl_carousel/owl.carousel.min.js"></script>
    <!-- Stellar JS -->
    <script src="vendors/stellar/jquery.stellar.js"></script>
    <!-- Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="vendors/map/topbuilder_map.min.js"></script>
    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>
