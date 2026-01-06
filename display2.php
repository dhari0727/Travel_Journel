<?php 
include("action.php");
$email=$_GET['email'];
$dash2 = "SELECT * from db2 where Title='$na' && eml='$email' ";
$dashdata2=mysqli_query($conn,$dash2);
$result2=mysqli_num_rows($dashdata2); ?>
 
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
    <!-- Travel Journal custom theme overrides -->
    <link rel="stylesheet" type="text/css" href="css/travel-theme.css">
</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
         <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                
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
                            <li><a href="login.php"><i data-feather="log-out"></i>LOGIN</a></li>
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
                
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    
                    <h6 class="mt-3 f-14">PROFILE</h6>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="dashboard.php" id="user2"><i data-feather="file-text"></i><span>Home</span></a></li>
                    <li><a class="sidebar-header" href="dashboard.php" id="user2"><i data-feather="edit"></i><span>New Entry</span></a></li>
                    <li><a class="sidebar-header" href="view-list.php" id="user2"><i data-feather="file-text"></i><span>View All Entries</span></a></li>
                    <li><a class="sidebar-header" href="pc.php" id="user2"><i data-feather="file-text"></i><span>View My Entries</span></a></li>
                    <li><a class="sidebar-header" href="login.php"><i data-feather="log-in"></i><span>LOGOUT</span></a>
                    </li>
                                        
                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11 col-md-12">

                <?php if ($res1 = mysqli_fetch_assoc($dashdata2)) { ?>


                <!-- FOOD EXPENSES -->
                <div class="tj-section">
                    <h4>Expenses</h4>

                    <div class="tj-expense-card"><span>Accomodation</span><span>₹ <?php echo $res1['accomodation']; ?></span></div>
                    <div class="tj-expense-card"><span>Luggage Locker Cost</span><span>₹ <?php echo $res1['locker']; ?></span></div>
                    <div class="tj-expense-card"><span>Airport Misc Cost</span><span>₹ <?php echo $res1['airport']; ?></span></div>
                    <div class="tj-expense-card"><span>Tour Guide Cost</span><span>₹ <?php echo $res1['tour']; ?></span></div>
                    <div class="tj-expense-card"><span>Phone Recharge Cost</span><span>₹ <?php echo $res1['phone']; ?></span></div>
                    <div class="tj-expense-card"><span>Internet Cost</span><span>₹ <?php echo $res1['internet']; ?></span></div>
                    <div class="tj-expense-card"><span>Camera Cost</span><span>₹ <?php echo $res1['camera']; ?></span></div>
                    <div class="tj-expense-card"><span>Medical Insurance Cost</span><span>₹ <?php echo $res1['insurance']; ?></span></div>
                    <div class="tj-expense-card"><span>Medical Cost</span><span>₹ <?php echo $res1['medi']; ?></span></div>
                <?php } ?>

                <!-- PAGINATION -->
                <div class="tj-pagination">
                    <a class="btn btn-light"
                       href="display1.php?title=<?php echo urlencode($_GET['title']); ?>&date=<?php echo urlencode($_GET['date']); ?>&email=<?php echo urlencode($_GET['email']); ?>">
                        ← Previous
                    </a>

                    <a class="btn btn-primary"
                       href="display3.php?title=<?php echo urlencode($_GET['title']); ?>&date=<?php echo urlencode($_GET['date']); ?>&email=<?php echo urlencode($_GET['email']); ?>">
                        Next →
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>


            <!-- Container-fluid Ends-->
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
<!-- Travel Journal UI enhancements -->
<script src="js/travel-ui.js"></script>

</body>
</html>
