<?php 
include("action.php");
$email=$_GET['email'];
$dash = "SELECT * from db where Title='$na' && eml = '$email'";
$dashdata=mysqli_query($conn,$dash);
$result1=mysqli_num_rows($dashdata);
echo $result1;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['travelMode'])) {
    $travelMode = $_POST['travelMode'];

    // Redirect based on the selected travel mode
    switch ($travelMode) {
        case 'train':
            header('Location: https://www.makemytrip.com/railways/');
            exit();
        case 'bus':
            header('Location: https://www.makemytrip.com/bus-tickets/');
            exit();
        case 'flight':
            header('Location: https://www.makemytrip.com/flights/');
            exit();
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
            <div class="container-fluid" data-animate="fade-up">
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
            <!-- Container-fluid Ends-->
<div class="container-fluid tj-view">
    <?php while ($result = mysqli_fetch_assoc($dashdata)) { ?>

    <div class="row">

        <!-- LEFT CONTENT -->
        <div class="col-lg-8">

            <div class="tj-hero">
                <h1><?php echo htmlspecialchars($result['Title']); ?></h1>
                <p class="tj-sub"><?php echo htmlspecialchars($result['Description']); ?></p>
            </div>

            <div class="tj-section">
                <h5><i class="fa fa-bed"></i> Stay</h5>
                <p class="tj-bold"><?php echo htmlspecialchars($result['hn']); ?></p>
                <p><?php echo nl2br(htmlspecialchars($result['address'])); ?></p>

                <a href="https://www.makemytrip.com/hotels/" target="_blank" class="btn btn-primary">
                    Explore Hotels
                </a>
            </div>

            <div class="tj-section">
    <h5><i class="fa fa-map-signs"></i> Places I Loved</h5>

    <?php
    $places = explode("\n", $result['ptv']);

    foreach ($places as $place) {
        $place = trim($place);

        if ($place !== '') {
            $place = strip_tags($place);
            $place = htmlspecialchars($place, ENT_QUOTES, 'UTF-8');

            // normalize unicode bold characters
            $place = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $place);

            echo "<div class='tj-place-card'>{$place}</div>";
        }
    }
    ?>
</div>
<?php
$media = array_values(array_filter(array_map('trim', explode(",", $result['media_files']))));
?>

<?php if (count($media) > 0) { ?>
<div id="tjCarousel" class="carousel slide tj-carousel" data-bs-ride="carousel" data-bs-interval="4000">

    <div class="carousel-inner">
        <?php foreach ($media as $i => $file) { 
            $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        ?>
            <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">

                <?php if (in_array($ext, ['mp4','webm','ogg'])) { ?>
                    <video class="tj-carousel-video"
                           muted
                           playsinline
                           loop>
                        <source src="<?php echo $file; ?>" type="video/<?php echo $ext; ?>">
                    </video>
                <?php } else { ?>
                    <img src="<?php echo $file; ?>" class="d-block w-100 tj-carousel-img">
                <?php } ?>

            </div>
        <?php } ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#tjCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#tjCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>
<?php } ?>








        </div>

        <!-- RIGHT INFO PANEL -->
        <div class="col-lg-4">
            <div class="tj-info-panel">

                <div class="tj-info-row">
                    <i class="fa fa-map-marker"></i>
                    <div>
                        <small>Destination</small>
                        <p><?php echo htmlspecialchars($result['City']); ?>, <?php echo htmlspecialchars($result['Country']); ?></p>
                    </div>
                </div>

                <div class="tj-info-row">
                    <i class="fa fa-calendar"></i>
                    <div>
                        <small>Travel Dates</small>
                        <p><?php echo $result['dv']; ?> → <?php echo $result['dr']; ?></p>
                    </div>
                </div>

                <div class="tj-info-row">
                    <i class="fa fa-plane"></i>
                    <div>
                        <small>Travel Mode</small>
                        <p><?php echo htmlspecialchars($result['tv']); ?></p>
                    </div>
                </div>

                <div class="tj-info-row">
                    <i class="fa fa-clock"></i>
                    <div>
                        <small>Journal Created</small>
                        <p><?php echo $result['cd']; ?></p>
                    </div>
                </div>

            </div>
        </div>

    </div>
     <div class="tj-step-nav">
  <a class="tj-next-btn"
     href="display1.php?title=<?php echo urlencode($resulta['Title']); ?>&date=<?php echo urlencode($resulta['cd']); ?>&email=<?php echo urlencode($resulta['eml']); ?>">
    Next <span>→</span>
  </a>
</div>

</div>


    <?php } ?>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
const carousel = document.getElementById('tjCarousel');

carousel.addEventListener('slid.bs.carousel', function () {
    document.querySelectorAll('#tjCarousel video').forEach(v => {
        v.pause();
        v.currentTime = 0;
    });

    const activeVideo = carousel.querySelector('.carousel-item.active video');
    if (activeVideo) {
        activeVideo.play();
    }
});

// autoplay first video if first slide is video
window.addEventListener('load', () => {
    const firstVideo = carousel.querySelector('.carousel-item.active video');
    if (firstVideo) {
        firstVideo.play();
    }
});
</script>


</body>
</html>
