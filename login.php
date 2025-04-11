
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

    <!--  ************************* Logins ************************** -->
    
    
     <section id="logins" class="our-blog container-fluid">
        <div class="container">
        <div class="inner-title">

                <h2>Login as</h2>
                <p>Choose your role to access the relevant portal:</p>
            </div>
            <div class="col-sm-12 blog-cont">
                <div class="row">
                    <div class="col-sm-3 blog-smk">
                        <div class="blog-single">
                            <div class="blog-single-det">
                                <a href="hms/user-login.php">
                                <img src="assets/images/patient.jpg" alt="" class="figure">
                                <h6>Patient</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 blog-smk">
                        <div class="blog-single">
                            <div class="blog-single-det">
                                <a href="hms/doctor">
                                <img src="assets/images/doctor.jpg" alt="" class="figure">
                                <h6>Doctor</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3 blog-smk">
                        <div class="blog-single">
                            <div class="blog-single-det">
                                <a href="hms/admin">
                                <img src="assets/images/admin.jpg" alt="" class="figure">
                                <h6>Admin</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3 blog-smk">
                        <div class="blog-single">   
                            <div class="blog-single-det">
                                <a href="hms/donor">
                                <img src="assets/images/donor.jpg" alt="" class="figure">
                                <h6>Donor</h6>
                                </a>
                            </div>
                        </div>
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