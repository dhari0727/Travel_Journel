<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #000;
}

/* HERO */
.hero {
    height: 100vh;
   
    display: flex;
    align-items: center;
    padding: 80px;
    color: #fff;
}

/* LEFT */
.hero-left {
    flex: 1;
}

.hero-left h1 {
    font-size: 72px;
    font-weight: 700;
    letter-spacing: 4px;
}

.hero-left p {
    max-width: 520px;
    margin: 20px 0 30px;
    font-size: 14px;
    line-height: 1.8;
    color: #ddd;
}

.explore-btn {
    display: inline-block;
    padding: 12px 30px;
    border-radius: 30px;
    background: #1e90ff;
    color: #fff;
    text-decoration: none;
    font-size: 14px;
}

/* RIGHT */
.hero-right {
    flex: 1;
    position: relative;
}

/* CAROUSEL */
.carousel {
    overflow: hidden;
    width: 100%;
}

.carousel-track {
    display: flex;
    gap: 24px;
    transition: transform 0.6s ease;
}

.card {
    min-width: 200px;
    height: 320px;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 20px 40px rgba(0,0,0,0.5);
}

.card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card-text {
    position: absolute;
    bottom: 16px;
    left: 16px;
    font-size: 13px;
    font-weight: 500;
}

/* ARROWS */
.arrow {
    position: absolute;
    bottom: -50px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255,255,255,0.9);
    color: #000;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 18px;
}

.arrow.left {
    left: 0;
}

.arrow.right {
    left: 60px;
}

.hero {
    position: relative;
    height: 100vh;
    overflow: hidden;
}

.bg-video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    transform: translate(-50%, -50%);
    object-fit: cover;
    z-index: -2;
}

.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));
    z-index: -1;
}

.hero-content {
    position: relative;
    z-index: 2;
    display: flex;
    padding: 80px;
    color: #fff;
}
/* HEADER */
.top-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 80px;
    background: rgba(0,0,0,0.35);
    backdrop-filter: blur(10px);
    z-index: 10;
}

.logo {
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
}

.nav-links a {
    margin-left: 30px;
    text-decoration: none;
    font-size: 14px;
    color: #ddd;
    transition: 0.3s;
}

.nav-links a:hover,
.nav-links a.active {
    color: #1e90ff;
}

/* PUSH HERO BELOW HEADER */
.hero {
    padding-top: 70px;
}


</style>
</head>

<body>
    <header class="top-header">
    <div class="logo">TravelLog</div>
    <nav class="nav-links">
        <a href="home.php" class="active">Home</a>
        <a href="dashboard.php">Add Entry</a>
        <a href="view-list.php">View All Entries</a>
    </nav>
</header>


<section class="hero">
     <video class="bg-video" autoplay muted loop playsinline>
        <source src="assets/video/travel.mp4" type="video/mp4">
    </video>

    <div class="hero-overlay"></div>
    <div class="hero-left">
        <h1>Write your way around the world.</h1>
        <p>
            This travel journal helps you preserve the moments that matter — from first steps in a new city to memories that stay forever.
        </p>
        <a href="#" class="explore-btn">Explore →</a>
    </div>

    <div class="hero-right">

        <div class="carousel">
            <div class="carousel-track" id="carouselTrack">

                <div class="card">
                    <img src="assets/images/thailand.jpg">
                    <div class="card-text">Buddha Temple, Thailand</div>
                </div>

                <div class="card">
                    <img src="assets/images/bali.jpg">
                    <div class="card-text">Broken Beach, Bali</div>
                </div>

                <div class="card">
                    <img src="assets/images/kerala.jpg">
                    <div class="card-text">Kerala</div>
                </div>

                <div class="card">
                    <img src="assets/images/japan.jpg">
                    <div class="card-text">Kyoto, Japan</div>
                </div>

            </div>
        </div>

        <div class="arrow left" onclick="moveCarousel(-1)">‹</div>
        <div class="arrow right" onclick="moveCarousel(1)">›</div>

    </div>

</section>

<script>
let index = 0;

function moveCarousel(direction) {
    const track = document.getElementById("carouselTrack");
    const cardWidth = 224; 
    index += direction;

    if (index < 0) index = 0;
    if (index > track.children.length - 3) index = track.children.length - 3;

    track.style.transform = `translateX(-${index * cardWidth}px)`;
}
</script>

</body>
</html>
