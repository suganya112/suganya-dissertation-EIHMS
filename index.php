
<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='index.php'</script>";

} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Healthcare Management System </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
     <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    
      <?php 
        include("header.php");
    ?>
    
     <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
            </ol>


   


            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/2.jpg" alt="Third slide" style="height: 500px; object-fit: cover;">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/1.jpg" alt="Second slide" style="height: 500px; object-fit: cover;">
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/3.jpg" alt="Second slide" style="height: 500px; object-fit: cover;">
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
 

    <!-- ################# Why Choose Us? #######################--->


    <section id="services" class="key-features department">
        <div class="container">
            <div class="inner-title">

                <h2>Why Choose Us?</h2>
                <p>Explore the key features that define our exceptional healthcare services:</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-key">
                        <i class="fa-solid fa-user-doctor"></i>
                        <h5>Expert Specialist Care</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-key">
                        <i class="fa-solid fa-vials"></i>
                        <h5>Laboratory Testing</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-key">
                       <i class="fa-solid fa-pills"></i>
                        <h5>Medication Access</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-key">
                        <i class="fa-solid fa-suitcase-medical"></i>
                        <h5>In-Home Support</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-key">
                        <i class="fa-solid fa-hand-holding-droplet"></i>
                        <h5>Blood Donation</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-key">
                        <i class="fa-solid fa-syringe"></i>
                        <h5>Vaccination</h5>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-key">
                        <i class="fa-solid fa-bed-pulse"></i>
                        <h5>Patient Monitoring</h5>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="single-key">
                        <i class="fa-solid fa-heart-pulse"></i>
                        <h5>Superior Treatment</h5>

                    </div>
                </div>
            </div>






        </div>

    </section>

<!-- ################# our vision #######################--->

    <section id="vision" class="our-vision">
    <div class="container">
        <div class="inner-title">
            <h2>Our Vision</h2>
            <p>Committed to delivering exceptional healthcare services with innovation and compassion.</p>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="assets/images/vision.png" alt="Our Vision" class="img-fluid" style="height: 300px; width: 800px; object-fit: cover;">
            </div>
            <div class="col-lg-6">
                <div class="single-key">
                    <h5>Excellence in Healthcare</h5>
                    <p>We strive to provide world-class medical care through advanced technology, expert specialists, and patient-centered services.</p>
                </div>

                <div class="single-key">
                    <h5>Compassionate Patient Care</h5>
                    <p>Our healthcare approach prioritizes empathy, ensuring every patient receives personalized and attentive treatment.</p>
                </div>

                <div class="single-key">
                    <h5>Innovative Technology</h5>
                    <p>Utilizing cutting-edge advancements to enhance healthcare services.</p>
                </div>
            </div>

        </div>
    </div>
</section>

 <!--  ************************* our core values ************************** -->
  
  <section id="core-values" class="key-features department">
    <div class="container">
        <div class="inner-title">
            <h2>Our Core Values</h2>
            <p>Principles that shape our commitment to delivering outstanding care and support to every patient.</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-keys">
                    
                    <h5>Integrity</h5>
                    <p>We prioritize integrity and transparency in all our actions, fostering trust and clear communication with patients and staffs.</p>
                </div>
            </div>


            <div class="col-lg-4 col-md-6">
                <div class="single-keys">
                    
                    <h5>Innovation</h5>
                    <p>We leverage innovative technology to improve healthcare delivery and outcomes for all patients.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-keys">
                    
                    <h5>Compassion</h5>
                    <p>We provide compassionate care with empathy, understanding, and kindness, ensuring that every patient feels supported and valued.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-keys">
                    
                    <h5>Excellence</h5>
                    <p>We are dedicated to providing exceptional care, prioritizing the health and well-being of every patient.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-keys">
                    
                    <h5>Teamwork</h5>
                    <p>We treat every individual with the utmost dignity, ensuring they are understood and valued in every aspect of their care.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-keys">
                    
                    <h5>Respect</h5>
                    <p>We honor every individual with respect, dignity, and a compassionate understanding of their needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

    
    </body> 
    
    
    
    
    <!-- ################# Footer Starts Here#######################--->

    <?php 
        include("footer.php");
    ?>
    
    
    
   

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>