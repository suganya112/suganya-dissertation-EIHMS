<?php
session_start();
error_reporting(0);
include('include/config.php');

if(strlen($_SESSION['id']) == 0) {
    header('location:logout.php');
} else {
    if(isset($_GET['del'])) {
        $donorId = $_GET['id'];
        mysqli_query($con, "DELETE FROM donors WHERE id ='$donorId'");
        $_SESSION['msg'] = "Data deleted !!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin | View Patients</title>
        
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
        <link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
        <link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
        <link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
        <link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
        <link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/plugins.css">
        <link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>
<body>
    <div id="app">        
        <?php include('include/sidebar.php'); ?>
        <div class="app-content">
            <?php include('include/header.php'); ?>
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Admin | Manage Donors</h1>
                            </div>
                            <ol class="breadcrumb">
                                <li><span>Admin</span></li>
                                <li class="active"><span>Manage Donors</span></li>
                            </ol>
                        </div>
                    </section>
                    
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="over-title margin-bottom-15">Manage <span class="text-bold">Donors</span></h5>
                                <p style="color:red;"><?php echo htmlentities($_SESSION['msg']); $_SESSION['msg'] = ""; ?></p>
                                
                                <!-- Blood Group Search Form -->
                                <form method="GET" action="">
                                    <div class="form-group">
                                        <label for="bloodgroup">Select Blood Group:</label>
                                        <select name="bloodgroup" class="form-control" required>
                                            <option value="">--Select Blood Group--</option>
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
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </form>

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">#</th>
                                            <th>Donor Name</th>
                                            <th>Blood Group</th>
                                            <th>Contact No</th>
                                            <th>Email</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$cnt = 1;
$whereClause = "";

if(isset($_GET['bloodgroup']) && $_GET['bloodgroup'] != "") {
    $bloodgroup = $_GET['bloodgroup'];
    $whereClause = "WHERE bloodgroup = '$bloodgroup'";
}

$sql = mysqli_query($con, "SELECT * FROM donors $whereClause");
while($row = mysqli_fetch_array($sql)) {
?>
                                        <tr>
                                            <td class="center"><?php echo $cnt; ?>.</td>
                                            <td><?php echo $row['donorName']; ?></td>
                                            <td><?php echo $row['bloodgroup']; ?></td>
                                            <td><?php echo $row['contactNo']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            
                                            <td>
                                                <a href="edit-donor.php?id=<?php echo $row['id']; ?>" class="btn btn-transparent btn-xs"><i class="fa fa-pencil"></i></a>
                                                <a href="manage-donors.php?id=<?php echo $row['id']; ?>&del=delete" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-transparent btn-xs"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
<?php
    $cnt++;
}
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('include/footer.php'); ?>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php } ?>
