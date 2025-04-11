<?php
include_once('include/config.php');

if (isset($_POST['submit'])) {
    $donorName = $_POST['donor_name'];
    $bloodgroup = $_POST['bloodgroup'];
    $address = $_POST['address'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Encrypt password

    $query = mysqli_query($con, "INSERT INTO donors(donorName, bloodgroup, address, contactNo, email, password) VALUES('$donorName', '$bloodgroup', '$address', '$contactNo', '$email', '$password')");

    if ($query) {
        echo "<script>alert('Successfully Registered. You can login now');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donor Registration</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
    <script type="text/javascript">
        function valid() {
            if (document.registration.password.value != document.registration.password_again.value) {
                alert("Password and Confirm Password do not match!");
                document.registration.password_again.focus();
                return false;
            }
            return true;
        }
    </script>
</head>

<body class="login" style="background: url('assets/images/bg.jpg') no-repeat center center fixed; background-size: cover; height: 100vh; margin: 0;">
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <a href="../index.php">
                    <h2>Donor Registration</h2>
                </a>
            </div>

            <div class="box-register">
                <form name="registration" id="registration" method="post" onSubmit="return valid();">
                    <fieldset>
                        <legend>Sign Up</legend>
                        <p>Enter your details below:</p>

                        <div class="form-group">
                            <input type="text" class="form-control" name="donor_name" placeholder="Full Name" required>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="bloodgroup" required>
                                <option value="">Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="contactNo" placeholder="Contact Number" required>
                        </div>

                        <p>Enter your account details below:</p>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()" placeholder="Email" required>
                            <span id="user-availability-status1" style="font-size:12px;"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="password_again" name="password_again" placeholder="Confirm Password" required>
                        </div>

                        <div class="form-actions">
                            <p>Already registered? <a href="index.php">Log in</a></p>
                            <button type="submit" class="btn btn-primary pull-right" id="submit" name="submit">
                                Submit <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>

                <div class="copyright">
                    &copy; <span class="current-year"></span> Blood Bank. All rights reserved.
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
        function userAvailability() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check_availability.php",
                data: 'email=' + $("#email").val(),
                type: "POST",
                success: function(data) {
                    $("#user-availability-status1").html(data);
                    $("#loaderIcon").hide();
                },
                error: function() {}
            });
        }
    </script>
</body>
</html>
