<?php 
include("action.php") ;

$email=$_GET['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
                <div class="logo-wrapper"><a href="dashboard.php"><img class="blur-up lazyloaded" src="../assets/images/dashboard/multikart-logo.png" alt=""></a></div>
            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        
                    </li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center">
                            <a href="#" id="user1">PROFILE</a>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li><a href="profile.php"><i data-feather="user"></i>Edit Profile</a></li>
                            <li><a href="#"><i data-feather="log-out"></i>Log-Out</a></li>
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
                <div class="logo-wrapper"><a href="dashboard.php"><img class="blur-up lazyloaded" src="../assets/images/dashboard/multikart-logo.png" alt="Logo"></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    
                    <h6 class="mt-3 f-14">PROFILE</h6>
                </div>
                <ul class="sidebar-menu">
                    <li ><a href="dashboard.php" class="sidebar-header"  id="user2"><i data-feather="home"></i><span>Home</span></a></li>
                    <li><a class="sidebar-header" href="dashboard.php" id="user2"><i data-feather="edit"></i><span>New Entry</span></a></li>
                    <li><a class="sidebar-header" href="view-list.php" id="user2"><i data-feather="file-text"></i><span>View All Entries</span></a></li>
                    <li><a class="sidebar-header" href="view-list.php" id="user2"><i data-feather="file-text"></i><span>View My Entries</span></a></li>
                    <li><a class="sidebar-header" href="login.php"><i data-feather="log-in"></i><span>Log-Out</span></a>
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
                                <h3 id="j1">PROFILE's Journel
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard.php" id="user1"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item" id="user1">Create Journel</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <form class="needs-validation" method="POST">
                                    <div class="form-group row col-xl-12">
                                            <div class="tab-pane fade active show" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                            <br><br>
                                            <h5 class="f-w-600">i) Food</h5>    
                                            <div class="table-responsive profile-table ">
                                                <table class="table table-responsive">
                                                    <tbody>
                                                    <tr>
                                                    <?php
                                                    while($res1 = mysqli_fetch_assoc($d1)){
                                                        echo '<td>a) Breakfast:</td>
                                                        <td  ><input class="form-control " id="validationCustom0" readonly name="breakfast" value='.$res1['break'] .' ></td>
                                                    </tr>
                                                        <tr>
                                                        <td>b) Lunch:</td>
                                                        <td  ><input class="form-control " id="validationCustom0" name="lunch" readonly value='.$res1['lunch'] .' ></td>
                                                    </tr>
                                                        <tr>
                                                        <td>c) Snacks:</td>
                                                        <td  ><input class="form-control " id="validationCustom0" name = "snacks" readonly value='.$res1['snacks'] .'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>d) Dinner:</td>
                                                        <td  ><input class="form-control " id="validationCustom0" name="dinner" readonly value='.$res1['dinner'] .'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>e) Beverages:</td>
                                                        <td  ><input class="form-control " id="validationCustom0" name="beverages" readonly value='.$res1['beverages'] .'></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="f-w-600">Sub Total:</td>
                                                        <td ><input class="form-control " id="validationCustom0" name="total" readonly value='.$res1['FOOD_COST'] .'></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                                
                                            <h5 class="f-w-600">ii) Transport Cost</h5>    
                                            <div class="table-responsive profile-table">
                                                <table class="table table-responsive">
                                                    <tbody>
                                                    <tr>
                                                        <td>a) Car Hiring Cost:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="car" readonly value='.$res1['car'] .'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>b) Taxi Fare:</td>
                                                        <td ><input class="form-control " id="validationCustom0" name="taxi" readonly value='.$res1['break'] .'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>c) Train Ticket Price:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="train" readonly value='.$res1['train'] .'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>d) Flight Fare:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="flight" readonly value='.$res1['flight'] .'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>e) Underground Train Ticket Fare:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="underground" readonly value='.$res1['train'] .'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>f) Pass Cost:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="pass"  readonly value='.$res1['pass'] .'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>g) Others:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="others"  readonly value='.$res1['others'] .'></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="f-w-600">Sub Total:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="total" readonly value='.$res1['TRANSPORT_COST'] .'></td>
                                                    </tr>'; }
                                                    ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            
                                           </div>
                                    </div>
                        </form>
                                                    <div class="typo-content product-pagination ">
                                    <ul class="pagination">
                                    	<li class="page-item"><a class="page-link" href="display.php?title=<?php echo urlencode($res5['Title']); ?>&date=<?php echo urlencode($res5['cd']); ?>&email=<?php echo urlencode($res5['eml']);?>" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="display.php?title=<?php echo urlencode($res5['Title']); ?>&date=<?php echo urlencode($res5['cd']); ?>&email=<?php echo urlencode($res5['eml']);?>">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="display2.php?title=<?php echo urlencode($res5['Title']); ?>&date=<?php echo urlencode($res5['cd']); ?>&email=<?php echo urlencode($res5['eml']);?>" >Next</a></li>
                                        <li class="page-item"><a class="page-link" href="display2.php?title=<?php echo urlencode($res5['Title']); ?>&date=<?php echo urlencode($res5['cd']); ?>&email=<?php echo urlencode($res5['eml']);?>" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a>
                                        </li>
                                    </ul>
                                </div>
                                                    
 <script src="js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

<!-- feather icon js -->
<script src="js/feather.min.js"></script>
<script src="js/feather-icon.js"></script>

<!-- Sidebar jquery -->
<script src="js/sidebar-menu.js"></script>

<!-- Customizer admin -->
<script src="js/admin-customizer.js"></script>

<!-- lazyload js -->
<script src="js/lazysizes.min.js"></script>

<!-- right sidebar js -->
<script src="js/chat-menu.js"></script>

<!-- dropzone js -->
<script src="js/dropzone-script.js"></script>
<script src="js/dropzone.js"></script>

<!-- Jsgrid js -->
<script src="js/jsgrid.min.js"></script>
<script src="js/griddata-page-list.js"></script>
<script src="js/jsgrid-page-list.js"></script>

<!-- Datepicker jquery -->
<script src="js/datepicker.custom.js"></script>
<script src="js/datepicker.en.js"></script>
<script src="js/datepicker.js"></script>

<!-- script admin -->
<script src="js/admin-script.js"></script>

</body>
</html>
