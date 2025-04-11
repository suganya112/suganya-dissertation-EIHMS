<?php
include_once('hms/include/config.php');
 ?>
 
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

    <!--  ************************* About Us Starts Here ************************** -->

<section id="about_us" class="about-us">
    <div class="container">
            <!-- About Us Text -->
            <div class="inner-title">
                <h2>Who We Are?</h2>
                <p>We are committed to providing quality healthcare through innovation and compassionate service.</p>
            </div>
            <div class="col-lg-12 about-text">
                <div class="row">
                    <!-- Image Grid (2x2 Layout) -->
            <div class="col-lg-6">
                <div class="image-grid">
                    <div class="grid-item"><img src="assets/images/about1.jpg" alt="Hospital Image 1"></div>
                    <div class="grid-item"><img src="assets/images/about2.jpg" alt="Hospital Image 2"></div>
                    <div class="grid-item"><img src="assets/images/about3.jpg" alt="Hospital Image 3"></div>
                    <div class="grid-item"><img src="assets/images/about4.jpg" alt="Hospital Image 4"></div>
                </div>
            </div>
                <?php
                $ret = mysqli_query($con, "select * from tblpage where PageType='aboutus'");
                while ($row = mysqli_fetch_array($ret)) {
                ?>
                    <div class="col-lg-6">
                        <p class="para"><?php echo $row['PageDescription']; ?></p>
                    </div>
                <?php } ?>
            
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