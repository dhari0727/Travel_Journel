<?php
include("action.php");
include("connection.php");
$email=$_GET['email'];
$upd3 = "SELECT * from db3 where Title='$na' && eml='$email' ";
$updata3=mysqli_query($conn,$upd3);
$upres3=mysqli_num_rows($updata3);

$qu = "SELECT FOOD_COST, TRANSPORT_COST from db1 WHERE Title = '$na' && eml='$email' ";
$dres = mysqli_query($conn, $qu);
if ($dres) {
    $row = mysqli_fetch_assoc($dres);
    $foodCost = (float)$row['FOOD_COST'];
    $transportCost = (float)$row['TRANSPORT_COST'];

    if(isset($_POST['save']))
    {
        $mu = $_POST['mue'];
        $p = $_POST['pr'];
        $c = $_POST['ci'];
        $club = $_POST['cl'];
        $party = $_POST['pt'];
        $clth = $_POST['clt'];
        $crd = $_POST['carr'];
        $gif = $_POST['gi'];
        $f = $_POST['fl'];
        $so = $_POST['so'];
        $stm = $_POST['stamps'];
        $m = $_POST['misc'];
        $subTotal = (float)$mu + (float)$p +  (float)$c + (float)$club + (float)$party ;
        $total =  (float)$clth +  (float)$crd + (float)$gif +  (float)$f +  (float)$so +  (float)$stm ; 
        $grand = $subTotal + $total + $foodCost + $transportCost;
        echo $grand;
        $query = "UPDATE db3 SET mus='$mu',park='$p',cl='$club' ,pt = $party ,clt='$clth',cr='$crd',gi='$gif',fl='$f',so='$so',stm='$stm',misc='$m', entry_fees='$subTotal', shopp_fees='$total' , GT='$grand'  WHERE Title='$na' ";

        $data = mysqli_query($conn,$query); 
        if($data)
        {
            echo "Data Updated!";
            header("location:dashboard.php");
            
        }
        else{
            echo "Failed to update";
        }
    }}?>
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
                            <li><a href="#"><i data-feather="log-out"></i>LOGIN</a></li>
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
                                            
                                            <h5 class="f-w-600">xii) Entry Fees</h5>    
                                            <div class="table-responsive profile-table ">
                                                <table class="table table-responsive">
                                                    <tbody>
                                                    <tr><?php
                                                    while($res3 = mysqli_fetch_assoc($updata3)){
                                                        echo '<td>a) Museum Entry:</td>
                                                        <td  ><input class="form-control " id="validationCustom0" name="mue"  value='.$res3['mus'].'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>b) Park Entry:</td>
                                                        <td  ><input class="form-control " id="validationCustom0" name="pr"  value='.$res3['park'].'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>c) Cinema Hall Entry:</td>
                                                        <td  ><input class="form-control " id="validationCustom0" name="ci"  value='.$res3['ci'].'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>d) Club Entry:</td>
                                                        <td  ><input class="form-control " id="validationCustom0" name="cl"  value='.$res3['cl'].'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>e) Party Entry:</td>
                                                        <td  ><input class="form-control " id="validationCustom0" name="pt"  value='.$res3['pt'].'></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="f-w-600">Sub Total:</td>
                                                        <td ><input class="form-control " id="validationCustom0" name="st"  value='.$res3['entry_fees'].'></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                                
                                            <h5 class="f-w-600">xiii) Shopping Expenses</h5>    
                                            <div class="table-responsive profile-table">
                                                <table class="table table-responsive">
                                                    <tbody>
                                                    <tr>
                                                        <td>a) Clothes:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="clt"  value='.$res3['clt'].'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>b) Cards:</td>
                                                        <td ><input class="form-control " id="validationCustom0" name="carr"  value='.$res3['cr'].'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>c) Gift Items:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="gi"  value='.$res3['gi'].'></td>
                                                    </tr>
                                                        <tr>
                                                        <td>d) Flight Fare:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="fl"  value='.$res3['fl'].'></td>
                                                    </tr>
                                                    <tr>
                                                        <td>e) Souvenirs:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="so"  value='.$res3['so'].' ></td>
                                                    </tr>
                                                        <tr>
                                                        <td>f) Stamps:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="stamps"  value='.$res3['stm'].'></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="f-w-600">Sub Total:</td>
                                                        <td><input class="form-control " id="validationCustom0" name="ttl"  value='.$res3['shopp_fees'].'></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                            <h5 class="f-w-600">xiv) Extra</h5>    
                                            <div class="table-responsive profile-table">
                                                <table class="table table-responsive">
                                                    <tbody>
                                                    <tr>
                                                        <td>a) Misc. Cost:</td>
                                                        <td><input class="form-control " id="validationCustom0" name = "misc"  value='.$res3['misc'].'></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                </div> 
                                                     
                                                
                                                
                                                 </div>
                                        
                                             </div>
                                   
                                
                                         <table class="table cart-table table-responsive-md">
                                          <tfoot>
                                                <tr>
                                                    <td><h2>Grand Total:</h2></td>
                                                    <td><input class="form-control " id="validationCustom0" name="gt"   type="text"  value='.$res3['GT'].'>
                                                    </td>
                                                </tr>'; } ?>
                                            </tfoot></tr></tbody></table>
                                       
                                        <div class="typo-content product-pagination ">
                                        <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="update2.php?title=<?php echo urlencode($resulta['Title']); ?>&date=<?php echo urlencode($resulta['cd']); ?>&email=<?php echo urlencode($resulta['eml']);?>" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="update2.php?title=<?php echo urlencode($resulta['Title']); ?>&date=<?php echo urlencode($resulta['cd']); ?>&email=<?php echo urlencode($resulta['eml']);?>">Previous</a></li>
                                        </ul>
                                    <div class="pull-right">
                                                    <a  href="update3.php?title=<?php echo urlencode($resulta['Title']); ?>&date=<?php echo urlencode($resulta['cd']); ?>&email=<?php echo urlencode($resulta['eml']);?>"><input type="Submit" name = "save" value="SAVE" class="btn btn-primary" >
                                                </div>
                    
             </form>                                        
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
