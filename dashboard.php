 <?php
error_reporting(0);
include("connection.php");

ini_set('session.gc_maxlifetime', 86400);
ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 1);
ini_set('session.cookie_lifetime', 86400);

$lastInsertedTitle = $_POST['title']; 

session_start();

$_SESSION['lastInsertedTitle'] = $lastInsertedTitle;
$em = $_SESSION['eml']; 

$mediaPaths = [];
$mediaPlaces = [];

if (!empty($_FILES['media_files']['name'][0])) {

    $totalFiles = count($_FILES['media_files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {

        $fileName = time() . "_" . $_FILES['media_files']['name'][$i];
        $tmpName  = $_FILES['media_files']['tmp_name'][$i];

        $uploadDir = "uploads/media/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $uploadPath = $uploadDir . $fileName;

        if (move_uploaded_file($tmpName, $uploadPath)) {
            $mediaPaths[] = $uploadPath;
        }
    }
}

if (!empty($_POST['media_place'])) {
    $mediaPlaces = $_POST['media_place'];
}

$mediaFilesString  = implode(",", $mediaPaths);
$mediaPlacesString = implode(",", $mediaPlaces);

if(isset($_POST['next'])){
    $tile = $_POST['title'];
    $d = $_POST['desc'];
    $coun = $_POST['coun'];
    $cin = $_POST['city'];
    $cd = $_POST['cd'];
    $dv = $_POST['dv'];
    $dr = $_POST['dr'];
    $tv = $_POST['tv'];
    $hn = $_POST['hn'];
    $add = $_POST['ad'];
    $ptv = $_POST['iv'];
    
    $query = "INSERT INTO db(Title,Description,Country,City,cd,dv,dr,hn,address,ptv,tv,eml,media_files,media_place) VALUES ('$tile','$d','$coun','$cin','$cd','$dv','$dr','$hn','$add','$ptv','$tv','$em','$mediaFilesString','$mediaPlacesString')";

    $data = mysqli_query($conn,$query);

    if($data){

       header("location:dashboard1.php");
    }
   else{
        echo 'failed';
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
                    
                    <h6 class="mt-3 f-14" style="color:#2f7df6" ;>PROFILE</h6>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="home.php" id="user2"><i data-feather="file-text"></i><span>Home</span></a></li>
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
            <div class="container-fluid" data-animate="fade-up">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3 id="j1" style="color:#1f6f97">PROFILE's Journel
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="dashboard.php" style ="color:#1f6f97" id="user1"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item" id="user1" style ="color:#1f6f97" >Create Journel</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid" data-animate="fade-up">
                <div class="card tab2-card" data-animate="fade-up">
                    <div class="card-header">
                        <h5>Write your Journey</h5>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                <form class="needs-validation" enctype="multipart/form-data" method="POST">
                                    <div class="tj-form-section">
                                        <div class="tj-form-section-header">
                                            <div class="tj-form-section-title">
                                                <span class="tj-form-section-title-icon">
                                                    <i class="fa fa-map-marker"></i>
                                                </span>
                                                <span>Journal title & story</span>
                                            </div>
                                            <span class="tj-form-section-caption">Start with the big picture</span>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> Title</label>
                                            <input class="form-control col-xl-8 col-md-7"  id="validationCustom0" name="title" type="text" placeholder="Sunrise in Santorini">
                                        </div>
                                        <div class="form-group row editor-label mb-0">
                                            <label class="col-xl-3 col-md-4"><span>*</span> Description</label>
                                            <div class="col-xl-8 col-md-7 editor-space">
                                                <textarea id="editor1" name="desc" cols="30" rows="6"  placeholder="Write about the highlights, feelings and stories from this trip..."></textarea>
                                            </div>        
                                        </div>
                                    </div>

                                    <div class="tj-form-section">
                                        <div class="tj-form-section-header">
                                            <div class="tj-form-section-title">
                                                <span class="tj-form-section-title-icon">
                                                    <i class="fa fa-globe"></i>
                                                </span>
                                                <span>Destination</span>
                                            </div>
                                            <span class="tj-form-section-caption">Where did you go?</span>
                                        </div>
                                        <div class="tj-grid-2">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input class="form-control" id="validationCustomCountry" name="coun" type="text" placeholder="Japan">
                                            </div>
                                            <div class="form-group">
                                                <label>City</label>
                                                <input class="form-control" id="validationCustomCity" name="city" type="text" placeholder="Kyoto">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tj-form-section">
                                        <div class="tj-form-section-header">
                                            <div class="tj-form-section-title">
                                                <span class="tj-form-section-title-icon">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                                <span>Dates & travel</span>
                                            </div>
                                            <span class="tj-form-section-caption">When and how you travelled</span>
                                        </div>
                                        <div class="tj-grid-2">
                                            <div class="form-group">
                                                <label>Current Date</label>
                                                <input class="form-control" name="cd" type="date">
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Visit</label>
                                                <input class="form-control" name="dv" type="date">
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Return</label>
                                                <input class="form-control" name="dr" type="date">
                                            </div>
                                            <div class="form-group">
                                                <label>Travel Mode</label>
                                                <input class="form-control" id="validationCustomTravelMode" name="tv" type="text" placeholder="Flight, train, road trip...">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tj-form-section mb-0">
                                        <div class="tj-form-section-header">
                                            <div class="tj-form-section-title">
                                                <span class="tj-form-section-title-icon">
                                                    <i class="fa fa-bed"></i>
                                                </span>
                                                <span>Stay & highlights</span>
                                            </div>
                                            <span class="tj-form-section-caption">Where you stayed and places you loved</span>
                                        </div>
                                        <div class="form-group row">
                                            <label for="validationCustomHotel" class="col-xl-3 col-md-4"><span>*</span> Accomodation / Hotel Name</label>
                                            <input class="form-control col-md-7" name="hn" id="validationCustomHotel" type="text" placeholder="Coastal View Hotel">
                                        </div>
                                        <div class="form-group row editor-label">
                                            <label class="col-xl-3 col-md-4"><span>*</span> Address</label>
                                            <div class="col-xl-8 col-md-7 editor-space">
                                                <textarea id="editorAddress" name="ad" cols="50" rows="3" maxlength="600"  placeholder="Street, city, country"></textarea>
                                                    
                                            </div>
                                        </div>
                                        <div class="form-group row editor-label mb-0">
                                            <label class="col-xl-3 col-md-4"><span>*</span>Interesting Places To Visit</label>
                                            <div class="col-xl-8 col-md-7 editor-space">
                                                <textarea id="editorHighlights" name="iv" cols="50" rows="4" maxlength="1000"  placeholder="Must‑visit spots, cafés and experiences from this trip..."></textarea>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                   <!-- <div class="form-group row">
                                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Upload Image</label>
                                        <input type="file" id="myFile" name="filename">
                                    </div>
                                    <div class="form-group row">
                                        <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Upload Movie Clip</label>
                                        <input type="file" id="myFile" name="filename">
                                    </div>--->
                                    <br>
                                    <div class="tj-form-section">
                                    <div class="tj-form-section-header">
                                        <div class="tj-form-section-title">
                                            <span class="tj-form-section-title-icon">
                                                <i class="fa fa-camera"></i>
                                            </span>
                                            <span>Media & Memories</span>
                                        </div>
                                        <span class="tj-form-section-caption">Upload images or videos for each place</span>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">
                                            Place Name
                                        </label>
                                        <input 
                                            type="text" 
                                            name="media_place[]" 
                                            class="form-control col-xl-8 col-md-7" 
                                            placeholder="e.g. Eiffel Tower">
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-xl-3 col-md-4">
                                            Upload Media
                                        </label>
                                        <input 
                                            type="file" 
                                            name="media_files[]" 
                                            class="form-control col-xl-8 col-md-7"
                                            accept="image/*,video/*"
                                            multiple>
                                    </div>
                                </div>
                                <div class="typo-content product-pagination ">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="dashboard1.php">Next</a></li>
                                        <li class="page-item"><a class="page-link" href="dashboard1.php" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a>
                                        </li>
                                    </ul>
                                </div>
                                                
                            </div>
                        </div>
                        
                        <div class="pull-right">
                            <input type="Submit" name = "next" value="SAVE" class="btn btn-primary"   onclick="location.href='dashboard2.php' ;">
                        </div></form>
                    </div>
                </div>
            </div>
                    
                    
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>
        </form>
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
