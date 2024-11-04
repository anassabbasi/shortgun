
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Short Gun LLC</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
        <!-- Core theme CSS (includes Bootstrap) using Vite -->
        @vite('resources/css/app.css')
        <style>

<style>
    .swiper-container {
        display: flex;
        align-items: center;
        width: 90vw;
        height: 70vh;
        overflow: hidden;
        position: relative;
    }

    .swiper-wrapper {
        display: flex;
        transition: transform 0.5s ease;
    }

    .swiper-slide {
        width: 18vw;
        height: 100%;
        margin: 0 10px;
        position: relative;
        flex-shrink: 0;
    }

    .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .center-slide {
        width: 22vw;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .center-image {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .center-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .follow-btn {
        position: absolute;
        bottom: 20px;
        background-color: #FFD700;
        color: #000;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }


    :root {
  --card-yellow: #FFD700;
  --card-border: #2C3E50;
  --text-dark: #000;
  --bg-dark: #0a0a0a;
}

/* body {
  margin: 0;
  min-height: 100vh;
  background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
              url('https://images.unsplash.com/photo-1531415074968-036ba1b575da?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80') center/cover;
  font-family: 'Arial', sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 2rem;
} */

.title {
  color: white;
  font-size: 2.5rem;
  margin-bottom: 3rem;
  text-align: center;
}
    .cards-container {
  display: flex;
  gap: 2rem;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 1200px;
}

.player-card {
  width: 300px;
  position: relative;
  padding-top: 20px;
}

.card-content {
  background: var(--card-yellow);
  border: 8px solid var(--card-border);
  border-radius: 0 0 150px 150px;
  padding: 1rem;
  padding-top: 60px;
  text-align: center;
  position: relative;
  clip-path: polygon(0 0, 100% 0, 100% 85%, 50% 100%, 0 85%);
}

/* .player-name {
  background: white;
  padding: 0.5rem 1rem;
  border-radius: 25px;
  display: inline-block;
  margin-bottom: 0.5rem;
  font-weight: bold;
  font-size: 1.2rem;
} */

.player-role {
  font-weight: bold;
  margin-bottom: 1rem;
  font-size: 1.1rem;
}

.stats-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 0.5rem;
  margin-bottom: 1rem;
}

.stat-item {
  text-align: center;
}

.stat-label {
  font-size: 0.8rem;
  font-weight: bold;
}

.stat-value {
  font-size: 1.1rem;
  font-weight: bold;
}

.flags {
  display: flex;
  justify-content: center;
  gap: 0.5rem;
  padding-bottom: 1rem;
}

.flag-icon {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  border: 2px solid var(--card-border);
}

.player-name{
  position: relative;
  margin: 0 auto 20px;
  padding: 10px 40px;
  text-align: center;
  background-color: #875e46;
}

.ribbon {
  font-size: 20px;
  font-weight: bold;
  color: #fff;
  position: relative;
  left: 20px;
 top: -17px;
}
.ribbon {
  --s: 1.8em; /* the ribbon size */
  --d: .8em;  /* the depth */
  --c: .8em;  /* the cutout part */
  
  padding: var(--d) calc(var(--s) + .5em) 0;
  line-height: 1.8;
  clip-path: polygon(0 0, calc(var(--s) + var(--d)) 0, calc(var(--s) + var(--d)) var(--d),
    calc(100% - var(--s) - var(--d)) var(--d), calc(100% - var(--s) - var(--d)) 0, 100% 0,
    calc(100% - var(--c)) calc(50% - var(--d)/2), 100% calc(100% - var(--d)),
    calc(100% - var(--s)) calc(100% - var(--d)), calc(100% - var(--s)) 100%, var(--s) 100%,
    var(--s) calc(100% - var(--d)), 0 calc(100% - var(--d)), var(--c) calc(50% - var(--d)/2));
  background-color: white; /* solid white background */
  color: black; /* black text color */
  width: fit-content;
}



</style>
    </head>

    <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-white fixed-top" id="mainNav">
    <div class="container-fluid px-4 px-lg-5">
        <a class="navbar-brand text-black" href="#about">Homepage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- Left-aligned navigation items -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-black px-2" href="#about">About</a>
                </li>
            </ul>

            <!-- Center-aligned image -->
            <div class="d-flex justify-content-center mx-auto my-2 my-lg-0">
                <img src="./images/navbar.png" alt="An image of LCC Shotguns" class="img-fluid" style="max-width: 100px; height: auto;" />
            </div>

            <!-- Right-aligned navigation items -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-black px-2" href="#projects">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black px-2" href="#signup">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead -->
<header class="masthead pt-8" style="padding-top: 120px;">
    <div class="d-flex flex-column align-items-center text-center" style="color: white;">
        <!-- Centered heading -->
        <div>
            <h4>LCC Shotguns</h4>
            <h2 style="font-size: 36px; font-weight: bold;">Passion in Every Play</h2>
        </div>
        
        <!-- Row for the numbers and image -->
        <div class="container mt-3">
            <div class="row w-100">
                <div class="col-12 col-md-4 text-start">
                    <p>
                        "LCC Shotguns – Passion in Every Play" captures our team's relentless drive, precision, and dedication to cricket.
                    </p>
                </div>
                <!-- Centered image -->
                <div class="col-12 col-md-5 text-center">
                    <img src="./images/plyrimg.png" alt="An image of LCC Shotguns" class="img-fluid" style="max-width: 82%; height: auto; margin-top: -200px;" />
                </div>
                <div class="col-12 col-md-3 text-end d-flex flex-column justify-content-end mb-2">
                    <p style="margin-bottom: 10px; font-size: 14px;">
                        Every match is more than just a game; it's an opportunity to showcase our talent, teamwork, and love for the sport.
                    </p>
                    <p style="margin-bottom: 150px;">
                        <a class="btn btn-primary" href="#" style="color: black;">Catch Every Match</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>
</div>



        <!-- About-->
<!-- About-->
<div class="mesthead">
    <section class="about text-center d-flex justify-content-center" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="./images/1page.png" class="img-fluid" style="width: 300px; height: 400px; filter: brightness(0.8) contrast(1.2); margin-right: -300px;" />
                    <img src="./images/2nd.png" class="img-fluid" style="width: 300px; height: 400px; filter: brightness(0.8) contrast(1.2); margin-left: 150px;" />
                </div>
                <div class="col-md-6 about-description custom-position p-xxl-5 text-start">
                    <h2 class="text-white" style="font-weight: bold;">Meet the LCC Shotguns</h2>
                    <h4 class="text-white" style="font-size: 18px;">
                        LCC Shotguns is more than a team—it’s a powerhouse of passion, skill, and unity. With every game, we bring intensity and strategy, proudly competing under the FM Elite Sports League. Our players push boundaries, create unforgettable moments, and captivate fans with every play. Dive into the world of the LCC Shotguns and see why we’re a team to watch as we make our mark both on and off the field.
                    </h4>
                    <p>
                        <a class="btn btn-primary" href="#" style="color: black;">Learn more about us</a>
                    </p>
                </div>
            </div>
        </div>
        <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 400px; background: linear-gradient(to bottom, transparent, #1a1a1a); pointer-events: none;"></div>
    </section>
</div>




<section class="about text-center d-flex flex-column align-items-center" style="background-color: black;" id="about">
    <div class="d-flex flex-column align-items-center text-center" style="width: 80%; max-width: 800px; color: white;">
        <!-- Centered heading -->
        <div class="w-100 d-flex flex-column justify-content-center align-items-center text-center gap-3 p-4">
            <div style="font-size: 1.125rem; text-transform: uppercase; font-weight: bold;">Celebrating Our Success</div>
            <div style="background-color: #fdd835; color: black; padding: 0.5rem 1rem; font-size: 1.5rem; font-weight: bold;">Runner Up in Dubai!</div>
        </div>
    </div>
    
    <img src="./images/wearellc.png" class="img-team img-fluid" style="max-width: 100%; height: auto;"/>

    <!-- Modified .about-description div with custom class -->
    <div class="about-description custom-position p-xxl-5 text-start">
        <!-- Add your content here if needed -->
    </div>
</section>




<!-- slider -->








<section class=""><section class="about text-center d-flex flex-column align-items-center">
    <div class="mastheaddddd">
        <h2 class="text-center mb-4 text-white">
            Stay Connected with Every <br> Match Moment
            <i class="fab fa-instagram" style="color:red"></i>
        </h2>

        <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <img src="./images/instagram0.png" alt="Slide 1">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <img src="./images/instagram1.png" alt="Slide 2">
            </div>
            <!-- Center Slide with button -->
            <div class="swiper-slide center-slide">
                <div class="center-image">
                    <img src="./images/instagram3.png" alt="Center Slide">
                    <button class="follow-btn">FOLLOW US ON INSTAGRAM</button>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <img src="./images/instagram4.png" alt="Slide 3">
            </div>
            <!-- Slide 4 -->
            <div class="swiper-slide">
                <img src="./images/instagram3.png" alt="Slide 4">
            </div>
        </div>
    </div>

       
    </div>

    <!-- <script>
let currentSlide = 0;
const totalSlides = document.querySelectorAll('.swiper-slide').length;
const swiperWrapper = document.querySelector('.swiper-wrapper');

// Function to move to the next slide
function moveToNextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlidePosition();
}

// Function to update the slide position
function updateSlidePosition() {
    swiperWrapper.style.transform = `translateX(-${currentSlide * 18}vw)`;
}

// Auto-slide every 3 seconds
setInterval(moveToNextSlide, 3000);       
    </script> -->
</section>

<section style="background-image: url('./images/smock.png');">
    <div class=".maasthead">
    <h1 class="title">Striking Talent and Determination</h1>
    <div class="cards-container">
      <!-- Khalid Shah Card -->
      <div class="player-card">
      <img src="./images/batter.png" alt="Khalid Shah" style="width: 200px; height: 250px; position: absolute;  z-index: 1; top: -165px; left: 18px;">
        <div class="card-content">
          <div class="ribbon">Khalid Shah</div>
          <div class="player-role">BATTER</div>
          <div class="stats-grid">
            <div class="stat-item">
              <div class="stat-label">LM</div>
              <div class="stat-value">82</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">OB</div>
              <div class="stat-value">70</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">WK</div>
              <div class="stat-value">60</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">RM</div>
              <div class="stat-value">70</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">WKT</div>
              <div class="stat-value">40</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">OV</div>
              <div class="stat-value">80</div>
            </div>
          </div>
          <div class="flags">
          <img src="./images/llcshortgun1.png" alt="Flag 1" class="flag-icon">
            <img src="./images/soccer.png" alt="Flag 2" class="flag-icon">
            <img src="./images/game.png" alt="Flag 3" class="flag-icon">
          </div>
        </div>
      </div>

      <!-- Fahad Nawaz Card -->
      <div class="player-card">
        <img src="./images/image21.png" alt="Fahad Nawaz" style="width: 200px; height: 250px; position: absolute;  z-index: 1; top: -165px; left: 18px;">
        <div class="card-content">
          <div class="ribbon">Fahad Nawaz</div>
          <div class="player-role">CAPTAIN</div>
          <div class="stats-grid">
            <div class="stat-item">
              <div class="stat-label">LM</div>
              <div class="stat-value">90</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">OB</div>
              <div class="stat-value">88</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">WK</div>
              <div class="stat-value">70</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">RM</div>
              <div class="stat-value">85</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">WKT</div>
              <div class="stat-value">50</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">OV</div>
              <div class="stat-value">86</div>
            </div>
          </div>
          <div class="flags">
            <img src="./images/llcshortgun1.png" alt="Team Logo" class="flag-icon">
          </div>
        </div>
      </div>

      <!-- Sabir Rao Card -->
      <div class="player-card">
        <img src="./images/players.png" alt="Sabir Rao"style="width: 180px; height: 200px; position: absolute;  z-index: 1; top: -115px; left: 60px;">
        <div class="card-content">
          <div class="ribbon">Sabir Rao</div>
          <div class="player-role">BOWLER</div>
          <div class="stats-grid">
            <div class="stat-item">
              <div class="stat-label">LM</div>
              <div class="stat-value">70</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">OB</div>
              <div class="stat-value">60</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">WK</div>
              <div class="stat-value">50</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">RM</div>
              <div class="stat-value">60</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">WKT</div>
              <div class="stat-value">36</div>
            </div>
            <div class="stat-item">
              <div class="stat-label">OV</div>
              <div class="stat-value">76</div>
            </div>
          </div>
          <div class="flags">
            <img src="./images/llcshortgun1.png" alt="Flag 1" class="flag-icon">
            <img src="./images/soccer.png" alt="Flag 2" class="flag-icon">
            <img src="./images/game.png" alt="Flag 3" class="flag-icon">
          </div>
        </div>
      </div>
    </div>
<div>
<section class="text-white">
    <div class="mastheaddd">
        <div class="container d-flex justify-content-center align-items-center py-5" style="
            height: 600px; /* Add this line to increase the height */
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        ">
            <div class="w-100 w-md-75 px-3">
                <h2 class="text-center fw-bold mb-4">Have Questions? Let's Connect!</h2>
                <form>
                    <div class="row mb-3">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <input type="text" class="form-control bg-dark text-white border-0" placeholder="First Name*" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" class="form-control bg-dark text-white border-0" placeholder="Last Name*" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <input type="tel" class="form-control bg-dark text-white border-0" placeholder="Phone Number*" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="email" class="form-control bg-dark text-white border-0" placeholder="E-mail Address">
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control bg-dark text-white border-0" placeholder="Your Message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 fw-bold">SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
</section>

   
<section style="background-color: #1a1a1a; border: 1px solid yellow; position: relative; overflow: hidden;" class="text-white">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-12 col-md-6 py-5 px-3">
                <h2 class="fw-bold">Don’t Miss Out – Follow Us and Stay Updated!</h2>
                <p class="mb-4">Don’t miss a beat – join our growing community of fans and feel the energy of each game, both on and off the field.</p>
                <a href="#" class="btn btn-warning fw-bold">JOIN OUR COMMUNITY!</a>
            </div>

            <!-- Image Section -->
            <div class="col-12 col-md-6 d-flex justify-content-center py-5 position-relative">
                <img src="./images/players.png" alt="Player Image" class="img-fluid" style="max-height: 400px;">
                <img src="./images/ball.png" alt="Ball Image" class="img-fluid position-absolute" style="max-height: 68px; top: 80%; left: 68%; transform: translate(-50%, -370%);">
            </div>
        </div>
    </div>
     
    <!-- Gradient Overlay for Fade Effect at Bottom -->
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 400px; background: linear-gradient(to bottom, transparent, #1a1a1a); pointer-events: none;"></div>
</section>


<!-- Footer -->
<footer class="bg-dark text-white">
<div class="mastheadddd">
    <div class="container">
        <div class="row text-center">
            <!-- Logo and Title Section -->
            <div class="col-12 col-md-4 d-flex flex-column align-items-center mb-4 mb-md-0">
                <img src="./images/navbar.png" alt="Logo" class="img-fluid mb-3" style="max-width: 100px;">
                <h5 class="fw-bold">LCC Shotguns One Shot</h5>
            </div>

            <!-- Quick Links Section -->
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <h6 class="fw-bold">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="#home" class="text-white text-decoration-none d-block py-1">Home</a></li>
                    <li><a href="#about" class="text-white text-decoration-none d-block py-1">About Us</a></li>
                    <li><a href="#team" class="text-white text-decoration-none d-block py-1">Our Team</a></li>
                    <li><a href="#contact" class="text-white text-decoration-none d-block py-1">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Info and Social Icons -->
            <div class="col-12 col-md-4">
                <h6 class="fw-bold">Send Us An Email</h6>
                <p class="mb-1"><a href="mailto:info@lccshotgun.in" class="text-white text-decoration-none">info@lccshotgun.in</a></p>
                <h6 class="fw-bold">Follow Us On</h6>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="text-warning fs-4"><i class="bi bi-camera-fill"></i></a>
                    <a href="#" class="text-warning fs-4"><i class="bi bi-x-circle-fill"></i></a>
                </div>
            </div>
        </div>

        <div class="text-center">
            <hr>
            <p>Copyright Lcc Shot Gun &copy; 2024 | All Rights Reserved</p>
        </div>
    </div>
</footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
