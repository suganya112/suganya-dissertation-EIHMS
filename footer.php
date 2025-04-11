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

<!-- ################# Footer #######################-->
<footer class="footer bg-dark text-white py-4">
    <div class="container">
        <div class="row">

            <!-- Health Care Description -->
            <div class="col-md-4">
                <h2>Health Care</h2>
                <p class="text-white">Efficient Integrated Healthcare Management System is a web platform that simplifies hospital and blood bank operations, improving patient care, appointments, and blood donation management.</p>
            </div>

            <!-- Useful Links -->
            <div class="col-md-2">
                <h2>Quick Links</h2>
                <ul class="list-unstyled">
                    <li><a href="about us.php" class="text-white">About Us</a></li>
                    <li><a href="login.php" class="text-white">Login</a></li>
                    <li><a href="contact us.php" class="text-white">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-3">
                <h2>Contacts</h2>
                <address>
                    <?php
                    $ret = mysqli_query($con, "select * from tblpage where PageType='contactus' ");
                    while ($row = mysqli_fetch_array($ret)) {
                    ?>
                        <p><?php echo $row['PageDescription']; ?></p>
                        <p>Phone: <?php echo $row['MobileNumber']; ?></p>
                        <p>Email: <a href="mailto:<?php echo $row['Email']; ?>" class="text-white"><?php echo $row['Email']; ?></a></p>
                        <p>Timing: <?php echo $row['OpenningTime']; ?></p>
                    <?php } ?>
                </address>
                
            </div>

            <!-- Social Media / Follow Us -->
            <div class="col-md-3">
                <h2>Social Media</h2>
                
                <div>
                    <a href="https://facebook.com" class="text-white mr-3" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" class="text-white mr-3" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com" class="text-white mr-3" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com" class="text-white mr-3" target="_blank"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            

        </div>
    </div>

    
</footer>

</body>

</html>



    </body>
<div class="copy">
            <div class="container">
         2025 Healthcare Management System. All Rights Reserved.
                
     
            </div>

        </div>
    
    

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>
</html>