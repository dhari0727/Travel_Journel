<?php 
 include("action.php");

include("connection.php");

$n=$_GET['title'];

$email=$_GET['email'];

echo $n;

$q = "SELECT * from db where Title = '$n' && eml='$email' ";

$data = mysqli_query($conn,$q);

$total = mysqli_num_rows($data);




    if(isset($_POST['save']))
    {
        $tile = $_POST['title'];
        $d = $_POST['desc'];
        $coun = $_POST['cn'];
        $cin = $_POST['ci'];
        $cd = $_POST['cd'];
        $dv = $_POST['dv'];
        $dr = $_POST['dr'];
        $tv = $_POST['tv'];
        $hn = $_POST['hn'];
        $add = $_POST['ad'];
        $ptv = $_POST['iv'];

        $query = "UPDATE db SET Title='$tile', Description='$d', Country='$coun', City='$cin', cd='$cd', dv='$dv', dr='$dr', tv='$tv', hn='$hn', address='$add', ptv='$ptv' WHERE Title='$n'";


        $data = mysqli_query($conn,$query); 
        if($data)
        {
            echo "Data Updated!";
            $titleParam = urlencode($resulta['Title']);
            $dateParam = urlencode($resulta['cd']);
            $emailparam = urlencode($resulta['eml']);
            header("Location: update1.php?title=$titleParam&date=$dateParam&email=$emailparam");

        }
        else{
            echo "Failed to update";
        }
    }
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

    <link rel="stylesheet" type="text/css" href="css/dropzone.css">
</head>
<body>
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
                        </form>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="media align-items-center">
                            <a href="#" id="user1">Profile</a>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li><a href="profile.php"><i data-feather="user"></i>Profile</a></li>
                            <li><a href="#"><i data-feather="log-out"></i>Log-IN</a></li>
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
                    
                    <h6 class="mt-3 f-14">Profile</h6>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="dashboard.php" id="user2"><i data-feather="file-text"></i><span> Home</span></a></li>
                    <li><a class="sidebar-header" href="dashboard.php" id="user2"><i data-feather="edit"></i><span>New Entry</span></a></li>
                    <li><a class="sidebar-header" href="view-list.php" id="user2"><i data-feather="file-text"></i><span>View All Entries</span></a></li>
                    <li><a class="sidebar-header" href="pc.php" id="user2"><i data-feather="file-text"></i><span>View My Entries</span></a></li>
                    <li><a class="sidebar-header" href="login.php" id="user2"><i data-feather="log-in"></i><span>LOGOUT</span></a>
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
                                <li class="breadcrumb-item" id="user1">Create Journel</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card tab2-card">
                    <div class="card-body">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <form class="needs-validation" method="POST">
                                    <div class="form-group row">
                                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Title</label>
                                        <?php
                                            while($result = mysqli_fetch_assoc($data)){
                                         	echo '<input class="form-control col-xl-8 col-md-7"  id="validationCustom0" name="title" value='.$result['Title'] .' type="text" >
                                    </div>
                                    <div class="form-group row editor-label">
                                        <label class="col-xl-3 col-md-4"><span>*</span> Description</label>
                                        <div class="col-xl-8 col-md-7 editor-space">
                                            <textarea id="editor1" name="desc" cols="30" rows="10" > '.$result['Description'].'</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">Country Name</label>
                                        <input class="form-control col-md-7" name="cn" value='.$result['Country'].' >
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">City Name</label>
                                        <input class="form-control col-md-7" name="ci" value='.$result['City'].' >
                                            
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4"> Current Date</label>
                                        <input class="form-control col-md-7" name="cd" value='.$result['cd'].' >
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">Date Of Visit</label>
                                        <input class="form-control col-md-7" name="dv" value='.$result['dv'].'  >
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">Date Of Return</label>
                                        <input class="form-control col-md-7" name="dr" value='.$result['dr'].' >
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">Travel Mode</label>
                                        <input class="form-control  col-md-7"  id="validationCustom0" name="tv" value='.$result['tv'] .' type="text" >

                                    </div>
                                    <div class="form-group row">
                                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Accommodation/Hotel Name</label>
                                        <input class="form-control  col-md-7" name="hn" id="validationCustom0" value='.$result['hn'].' type="text" >
                                    </div>
                                    <div class="form-group row editor-label">
                                        <label class="col-xl-3 col-md-4"><span>*</span> Address</label>
                                        <div class="col-xl-8 col-md-7 editor-space">
                                            <textarea id="editor1" name="ad" cols="50" rows="5" maxlength="600" value='.$result['address'].' >'.$result['address'].'</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row editor-label">
                                        <label class="col-xl-3 col-md-4"><span>*</span>Interesting Places To Visit</label>
                                        <div class="col-xl-8 col-md-7 editor-space">
                                            <textarea id="editor1" name="iv" value='.$result['ptv'].' cols="50" rows="5" maxlength="1000" >'.$result['ptv'].'</textarea> ';}?>
                                        </div>
                                        <?php $result = mysqli_fetch_assoc($data); ?>
                                    
                                    <div class="typo-content product-pagination ">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="update1.php?title=<?php echo urlencode($resulta['Title']); ?>&date=<?php echo urlencode($resulta['cd']); ?>&email=<?php echo urlencode($resulta['eml']);?>">Next</a></li>

                                        <li class="page-item"><a class="page-link" href="update1.php?title=<?php echo urlencode($resulta['Title']); ?>&date=<?php echo urlencode($resulta['cd']); ?>&email=<?php echo urlencode($resulta['eml']);?>" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                        </ul>
                                    
                                       <div class="pull-left">
                                        <a href="update1.php?title=<?php echo urlencode($resulta['Title']); ?>&date=<?php echo urlencode($resulta['cd']); ?>&email=<?php echo urlencode($resulta['eml']);?>"><input type="Submit" name = "save" value="SAVE" class="btn btn-primary" >
                                    </div>
                                </form>
                                

<!-- latest jquery -->
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
