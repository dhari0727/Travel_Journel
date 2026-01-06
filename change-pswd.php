<?php
include("connection.php");
$err="";
session_start();
$fname=$_SESSION['fname'];
echo $fname;
$q = "SELECT * FROM signup WHERE fname = '$fname' ";
$data = mysqli_query($conn, $q);
$res = mysqli_fetch_assoc($data);
if(isset($_POST['Save'])){
    $p = $_POST['PASS'];
    
     
    $uppercase = preg_match('@[A-Z]@', $p);
    $lowercase = preg_match('@[a-z]@', $p);
    $number = preg_match('@[0-9]@', $p);
    $specialChars = preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $p);
    $minLength = strlen($p) >= 8;
    if(!$uppercase || !$lowercase || !$number || !$specialChars || !$minLength)
    {
        $err = 'Password must contain atleast 8 characters , 1 capital letter and 1 special character';
    }
    else
    {
        $query = "UPDATE signup SET psw='$p' WHERE fname = '$fname' ";
        $dat = mysqli_query($conn, $query);
        
        if($dat){
        
        echo '<script>alert("Password Updated!")</script>';
        header("location:profile.php");
    }   else {
        echo "Failed to update: " . mysqli_error($conn); // Check for errors in your query
    }

}
}
?>
<!DOCTYPE.php>
<.php lang="en">
<head>

    <meta http-equiv="Content-Type" content="text.php; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/dashboard/favicon.png" type="image/x-icon">
    <title>Travel Journel</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">

    <!-- Ico-font-->
    <link rel="stylesheet" type="text/css" href="css/icofont.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="css/flag-icon.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
   <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    
    <!-- date-picker css-->
    <link rel="stylesheet" type="text/css" href="css/date-picker.css">
    
    <link rel="stylesheet" type="text/css" href="css/dropzone.css">
</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
         <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class="logo-wrapper"><a href="index.php"><img class="blur-up lazyloaded" src="../assets/images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center">
                            <a href="#" id="user1">Profile</a>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li><a href="#"><i data-feather="user"></i>Profile</a></li>
                            <li><a href="#"><i data-feather="log-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>
   
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="dashboard.php"><img  src="../assets/images/dashboard/multikart-logo.png" alt="Logo"></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    
                    <h6 class="mt-3 f-14">Profile</h6>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="dashboard.php" id="user2"><i data-feather="file-text"></i><span>Home</span></a></li>
                    <li><a class="sidebar-header" href="dashboard.php" id="user2"><i data-feather="edit"></i><span>New Entry</span></a></li>
                    <li><a class="sidebar-header" href="view-list.php" id="user2"><i data-feather="file-text"></i><span>View All Entries</span></a></li>
                    <li><a class="sidebar-header" href="pc.php" id="user2"><i data-feather="file-text"></i><span>View My Entries</span></a></li>
                    
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3 id="j1">Profile's Journel
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard.php" id="user1"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item" id="user1">Change Password</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card tab2-card">
                            <div class="card-header">
                                <h5>Change Password</h5>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                                    <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Password</a></li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <form method = "POST" class="needs-validation user-add" novalidate="">
                                            <h4>Password Details</h4>
                                            <div class="form-group row">
                                                <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Old Password</label>
                                                <input class="form-control col-xl-8 col-md-7" id="validationCustom0" value="<?php echo $res['psw']; ?>" type="text" required="">
                                            </div>
                                            <div class="form-group row">
                                                <label for="validationCustom1" class="col-xl-3 col-md-4">New Password</label> 
                                                <input class="form-control col-xl-8 col-md-7" name="PASS" id="validationCustom1" type="password" required=""><span style="color:red;"><?php echo $err ?></span>
                                            </div>
                                
                                        <div class="pull-right">
                                        <input type="submit" name="Save" value="SAVE" class="btn btn-primary">
                                    </form>
                                  </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 footer-copyright">
                        <p class="mb-0">Copyright 2023 © Travel All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end-->

    </div>

</div>

<!-- latest jquery-->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="js/feather.min.js"></script>
<script src="js/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="js/sidebar-menu.js"></script>


<!--Customizer admin-->
<script src="js/admin-customizer.js"></script>

<!-- lazyload js-->
<script src="js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="js/chat-menu.js"></script>
    
    
<!-- dropzone js-->
<script src="js/dropzone-script.js"></script>
<script src="js/dropzone.js"></script>    
    
    

<!--Datepicker jquery
    
 <script src="js/datepicker.custom.js"></script>
<script src="js/datepicker.en.js"></script>
<script src="js/datepicker.js"></script>-->
    
<!--script admin-->
<script src="js/admin-script.js"></script>

</body>
<.php>
