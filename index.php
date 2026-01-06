<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Journal &mdash; Welcome</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!-- Main theme and travel overrides -->
    <link rel="stylesheet" type="text/css" href="css/color18.css" media="screen" id="color">
    <link rel="stylesheet" type="text/css" href="css/travel-theme.css">
</head>
<body>

<div class="page-wrapper">
    <!-- Simple top navigation -->
    <header class="page-main-header" style="position:static;">
        <div class="main-header-right row align-items-center px-4">
            <div class="col-lg-3 d-flex align-items-center">
                <a href="index.php" class="d-flex align-items-center">
                    <span class="tj-form-section-title-icon mr-2">
                        <i class="fa fa-plane"></i>
                    </span>
                    <span style="font-weight:700;letter-spacing:0.08em;text-transform:uppercase;color:#e5edff;">Travel Journal</span>
                </a>
            </div>
            <nav class="nav-right col-lg-6 d-none d-lg-flex justify-content-center">
                <ul class="nav-menus" style="gap:1.5rem;display:flex;align-items:center;list-style:none;margin:0;">
                    <li><a href="index.php" style="color:#e5edff;font-weight:500;">Home</a></li>
                    <li><a href="dashboard.php" style="color:#e5edff;font-weight:500;">New Entry</a></li>
                    <li><a href="view-list.php" style="color:#e5edff;font-weight:500;">All Entries</a></li>
                    <li><a href="pc.php" style="color:#e5edff;font-weight:500;">My Entries</a></li>
                </ul>
            </nav>
            <div class="col-lg-3 text-right pr-4">
                <a href="login.php" class="btn btn-solid btn-sm">Sign in</a>
                <a href="register.php" class="btn btn-outline-light ml-2" style="border-radius:999px;border:1px solid rgba(226,232,240,0.7);padding:0.45rem 1.1rem;font-size:0.85rem;">Create account</a>
            </div>
        </div>
    </header>

    <!-- Hero section -->
    <main class="page-body" style="margin-top:0;">
        <div class="container-fluid section-b-space" data-animate="fade-up">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 mb-4">
                    <span class="tj-badge mb-3">
                        <i class="fa fa-pencil mr-1"></i> Travel journal
                    </span>
                    <h1 style="font-size:2.4rem;line-height:1.15;margin-bottom:1rem;color:#0f172a;">
                        Visit incredible places.<br>Remember every moment.
                    </h1>
                    <p style="font-size:0.98rem;max-width:430px;">
                        Plan, record, and relive your journeys in one minimal, beautiful space.
                        Capture stories, expenses, and highlights from every trip.
                    </p>
                    <div class="mt-4 d-flex flex-wrap align-items-center">
                        <a href="register.php" class="btn btn-solid mr-3 mb-2">
                            Start your first journal
                        </a>
                        <a href="login.php" class="btn btn-link mb-2" style="color:#2563eb;font-weight:600;">
                            Continue where you left off
                        </a>
                    </div>
                    <div class="mt-4 d-flex flex-wrap" style="gap:1rem;">
                        <div class="tj-metric-pill">
                            <span class="tj-metric-label">Entries</span>
                            <span class="tj-metric-value">Organised by trip</span>
                        </div>
                        <div class="tj-metric-pill">
                            <span class="tj-metric-label">Memories</span>
                            <span class="tj-metric-value">Stories, notes &amp; budgets</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-4">
                    <div class="tj-form-section tj-hero-illustration" style="position:relative;overflow:hidden;">
                        <div class="tj-form-section-header mb-3">
                            <div class="tj-form-section-title">
                                <span class="tj-form-section-title-icon">
                                    <i class="fa fa-map-o"></i>
                                </span>
                                <span>Next up</span>
                            </div>
                            <span class="tj-form-section-caption">Quick actions</span>
                        </div>
                        <div class="tj-grid-2">
                            <a href="dashboard.php" class="btn btn-solid" style="width:100%;text-align:center;">Create new entry</a>
                            <a href="view-list.php" class="btn btn-outline-primary" style="width:100%;border-radius:999px;border:1px solid #bfdbfe;color:#1d4ed8;font-weight:600;">
                                Browse all journeys
                            </a>
                        </div>
                        <div class="mt-4" style="font-size:0.82rem;color:#6b7280;">
                            Your journal keeps titles, locations, dates and expenses together so it’s easy to remember
                            every detail of your trips.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 footer-copyright">
                    <p class="mb-0">Travel Journal &mdash; capture every journey.</p>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- scripts -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/travel-ui.js"></script>

</body>
</html>

