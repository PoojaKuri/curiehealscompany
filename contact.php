<?php

include 'config.php';

if(isset($_POST['send'])){
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $msg=mysqli_real_escape_string($conn, $_POST['message']);

    $select_message=mysqli_query($conn, "SELECT * FROM `contact` WHERE name='$name' AND email='$email' AND message='$msg'") or die('Query failed');
    
    if(mysqli_num_rows($select_message)>0){
        $message[]='Message sent already!';
    }
    else{
        mysqli_query($conn, "INSERT INTO `contact`(name, email, message) VALUES('$name', '$email', '$msg')") or die('Query failed');
        $message[]='Message sent successfully';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>	CONTACT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<style>
	  
			 
	   .navback{
	             background-color:#15673F; 
				}
		.footcollor{
				color:#E6097B; 
				}
		.maincolor{
					color:#15673F;
				  }
		.heading{
					color:#DCE386; 
				}
	     .ct-socials {
    position: fixed;
    top: 30%;
    right: 0;
    list-style: none;
    padding-left: 0;
    z-index: 10;
    margin: 0;
    -webkit-transition: left 0.25s ease-in-out;
    transition: left 0.25s ease-in-out;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
	margin-top:150px;
}
.ct-socials li {
    padding: 0px 0;
}
.ct-socials li a {
   
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    width: 44px;
    height: 54px;
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
    float: right;
    padding-left: 5px;
}
.ct-socials li a:hover {
width: 54px;
padding-left: 0;
text-decoration: none;

}

    tr { background-color: #ffffff}
    .normal { background-color: #ffffff }
  .highlight {background: linear-gradient(180deg, #FFC371, #FF5F6D) }

.ct-socialss {
    position: fixed;
    top: 50%;
    left: 0;
    list-style: none;
    padding-right: 0;
	padding-left:0;
    z-index: 10;
    margin: 0;
    -webkit-transition: left 0.25s ease-in-out;
    transition: left 0.25s ease-in-out;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
	
}
.text{
    transform:rotate(90deg);
	}
.ct-socialss li {
    padding: 0px 0;
}
.ct-socialss li a {
   
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    color: #fff;
    width: 35px;
    height: 105px;
    -webkit-transition: all 0.15s ease-in-out;
    transition: all 0.15s ease-in-out;
    float: left;
    padding-right: 5px;
}
.ct-socialss li a:hover {
width: 54px;
padding-left: 0;
text-decoration: none;

}
	</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
   <ul class="ct-socials">
        <li style="background-color:#DCE386;font-size:25px;">
           <a href="tel:919146479292" target="_blank"><i class="fa fa-phone"></i></a>
       </li>
        <li style="background-color:#15673F;font-size:25px;">
           <a href="https://api.whatsapp.com/send?phone=919146479292&text=Welcome To Prakritik Chikitsa"><i class="fa fa-whatsapp"></i></a>
        </li>
        
		<li style="background-color:#DCE386;font-size:25px;">
           <a href="https://in.linkedin.com/in/dr-darshan-chandur-296181246" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        </li>
     </ul>
   <ul class="ct-socialss">
	  <li style="background-color:#15673F;font-size:25px;float:left;">
           <a href="contact.html" target="_blank"><h6 class="text" style="color:white;">Appointment</h6>
		   
       </li>
	   
	  </ul>
    <!-- Navbar Start -->
	<!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <img style="border-radius:20%;"class="img-fluid" src="img/logo.jpg" alt="Logo">
					
                </a>
				<h5 style="padding-left:180px;padding-top:5px;text-align:justify;" class="maincolor">Dr.Chandur's<br>Prakritik Chikitsa</h5>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="services.html" class="nav-item nav-link">Speciality</a>
                        <a href="ayurveda.html" class="nav-item nav-link ">Ayurveda</a>
                      
                        <a href="contact.html" class="nav-item nav-link active">Contact</a>
                    </div>
                 
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-dark mb-4 animated slideInDown">Contact Us</h1>
            
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl contact py-5">
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium fst-italic text-primary">Connect with us here</p>
                <h1 class="display-6 maincolor">We are Available 24 X 7 </h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-envelope fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">prakrutikchikitsa99@gmail.com</p>
                    <p class="mb-0">prakrutikchikitsa98@gmail.com</p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-phone fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">+0231-265001</p>
                    <p class="mb-0">+91 9146479292</p>
                </div>
                <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="btn-square mx-auto mb-3">
                        <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                    </div>
                    <p class="mb-2">Shree Laxmi Newas, Near Mahaveer Garden, </p>
                    <p class="mb-0">Opp Pendharkar dalan, Kolhapur,416001</p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-4 maincolor">Enquire for Treatement ! </h3>
                    <p class="mb-4">Please share your details for treatement. We will be in touch as soon as possible.</p>
                    <form
                             action="https://formspree.io/f/xknaddka"
                            method="POST"
                    >

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
							<div class="col-12">
							<label for="service">Choose a Service</label>
                           <select id="service" name="service">
                                  <option value="volvo">Panchakarma</option>
                                   <option value="saab">Yoga</option>
                                    <option value="fiat">Nadi-Parikshan</option>
                                <option value="audi">Ayurvedic-Diet</option>
								<option value="audi">Garbha-Sanskar</option>
                       </select>
							</div>
                            <div class="col-12">
                                <button style="color:black;" class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
							
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <iframe class="w-100 rounded"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.582610649493!2d74.09792947486413!3d16.597504284161197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc053df681cd7af%3A0xadbe63ab1a38153b!2sPrakrutik%20Chikitsa!5e0!3m2!1sen!2sin!4v1688463592322!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

<!-- Footer Start -->
    <div class="container-fluid  footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 navback">
            <div class="row g-5 ">
                <div class="col-lg-3 col-md-6">
                    <h4 class="heading">Our hospital</h4>
                    <p style="text-align:justify;" class="mb-2"><i class="fa fa-map-marker-alt footcollor"></i>&emsp;Shree Laxmi Newas, Near Mahaveer Garden,Opp Pendharkar dalan, Kolhapur,416001 </p>
                    <p class="mb-2"><i class="fa fa-phone-alt footcollor"></i>&emsp;0231-265 4192</p>
					  <p class="mb-2"><i class="fa fa-mobile footcollor" aria-hidden="true"></i>&emsp;+91 9146479292</p>
                  
                    <p class="mb-2"><i class="fa fa-envelope footcollor"></i>&emsp;prakruticchikitsa@gmail.com</p>
                    <div class="d-flex pt-3">
                        
                        <a class="btn btn-square footcollor rounded-circle me-2" href="https://www.facebook.com/Prakruteechikitsa/"><i class="fab fa-facebook-f"></i></a>
                      
                      
                        <a class="btn btn-square footcollor rounded-circle me-2" href="https://in.linkedin.com/in/dr-darshan-chandur-296181246"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 ">
                    <h4 class="heading ">Quick Links</h4>
                    <a style="background-color:#15673F;"class="btn btn-link fa-map-marker-alt" href="about.html">About Us</a>
                    <a style="background-color:#15673F;"class="btn btn-link fa-map-marker-alt" href="contact.html">Contact Us</a>
                    <a style="background-color:#15673F;"class="btn btn-link fa-map-marker-alt" href="services.html">Our Speciality</a>
                   
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="heading">Open Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="heading">Appointment</h4>
                    <p>Easy online booking from anywhere,anytime.</p>
                    <div class="position-relative w-100">
                        <input style="color:black;"class="form-control  w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email"  name="Texts">
                        <button type="button submit" class="btn footcollor py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="footcollor" href="index.html">Prakritik Chikitsa</a><p>All Right Reserved</p>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="footcollor bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	<script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '6a891b67-641e-4a6b-87d5-cadffe0e08a4', f: true }); done = true; } }; })();</script>
	
    </body>

</html>