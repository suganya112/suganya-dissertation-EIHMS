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

    <!--  ************************* Contact Us Starts Here ************************** -->

<section id="about_us" class="about-us">
    <div class="container">
            <!-- Contact Us Text -->
            <div class="inner-title">
                <h2>Contact us</h2>
                
            </div>
            <div class="col-lg-12 about-text">
                <div class="row">
                    <!-- Image Grid (2x2 Layout) -->
            <div class="col-lg-6">
                <div class="image-grid">
                    <div class="grid-item"><img src="assets/images/contact1.jpg" alt="Hospital Image 1"></div>
                    <div class="grid-item"><img src="assets/images/contact2.jpg" alt="Hospital Image 2"></div>
                    <div class="grid-item"><img src="assets/images/contact3.jpg" alt="Hospital Image 3"></div>
                    <div class="grid-item"><img src="assets/images/contact4.jpg" alt="Hospital Image 4"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div  class=" cop-ck">
                <form method="post">
                
                    <div class="row cf-ro">
                        <div  class="col-sm-4"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>
                    <div  class="row cf-ro">
                        <div  class="col-sm-4"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm"  required></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-4"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-4"><label>Enter  Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                     <div  class="row cf-ro">
                        <div  class="col-sm-4"><label></label></div>
                        <div class="col-sm-8">
                         <button class=" btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                </div>
            </form>
            </div>
     
        </div>
    </section>
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