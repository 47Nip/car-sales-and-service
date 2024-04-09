<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car sale and services</title>

    <link rel="stylesheet" href="home (2).css">

    <!-- Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php include "nav.php"?>
    
    <!--Home  -->
    
    <section class="home" id="home">
        
        <div class="home-text">
            <h1>We Have Everythng <br> Your <span>Car</span> Need</h1>
            <br>

            <!-- Home Button -->
            <a href="#" class="btn">Discover now</a>
        </div>
    </section>
    <!-- Car Search -->
    <section class="cars" id="cars">
        <div class="heading">
            <span>All Cars</span>
            <h2>We have all types cars</h2>
      
        </div>
        <!-- Cars Container -->
        <div class="cars-container container">
            <!-- Box1 -->
            <div class="box">
            <a href="carsale.php" >
                <img src="img/carh1.jpg" alt="">
              </a>
                
            </div>
            <!-- Box2 -->
            <div class="box">
            <a href="carsale.php" >
                <img src="img/carh2.jpg" alt="">
            </a>
            </div>
            <!-- Box3 -->
            <div class="box">
            <a href="carsale.php" >
                <img src="img/carh3.jpg" alt="">
               </a>
            </div>
            <!-- Box4 -->
            <div class="box">
            <a href="carsale.php" >
                <img src="img/carh4.jpg" alt="">
                </a>
            </div>
            <!-- Box5 -->
            <div class="box">
                <a href="carsale.php" >
                <img src="img/carh5.jpg" alt="">
                </a>
            </div>
            <!-- Box6 -->
            <div class="box">
            <a href="carsale.php" >
                <img src="img/carh6.jpg" alt="">
                </a> 
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="about container" id="about">
        <div class="about-img">
            <img src="img/about.png" alt="">
        </div>

        <div class="about-text">
            <span>About Us</span>
            <h2>Cheap Price With <br>Quality Cars</h2>
            <br>
            <!-- About Button -->
            <a href="About.php" class="btn">Learn More</a>
        </div>
    </section>

    <!-- service Section -->
    <section class="parts" id="parts">
        <div class="heading">
            <span>Service Offer</span>
            <h2>All type of service</h2>
            
        </div>
        <!-- Parts Container -->
        <div class="parts-container container">
            <!-- Box 1 -->
            <div class="box">
                <img src="img\car-service-1.webp" alt="">
                <h3>Car Wash</h3>
               <br>
                <a href = "service_book.php" class = "btn">Boook Now </a>
                <a href="service_1.php" class="details">Views Details</a>
            </div>    
            <!-- Box 2 -->
            <div class="box">
                <img src="img/car-service-2.webp" alt="">
                <h3>Regular Maintenance</h3>
               <br>
                <a href="service_book.php" class="btn">Book now</a>
                <a href="regular_service.php" class="details">Views Details</a>
            </div>    
            <!-- Box 3 -->
            <div class="box">
                <img src="img/car-service-3.png" alt="">
                <h3>Repair Car</h3>
                <br>
                <a href="service_book.php" class="btn">Book Now</a>
                <a href="repair.php" class="details">Views Details</a>
            </div>    
              <!-- Box 4 -->
            <div class="box col-md-3">
                <img src="img/car_service_15.jfif" alt="">
                <h3>SOS Service</h3>
               <br>
                <a href="SOS.php" class="details">Views Details</a>
                <a href="service_book.php" class="btn">Book Now </a>
            </div>
            <!-- Box 5 -->
            <div class="box col-md-3">
                <img src="img/car_service_23.jfif" alt="">
                <h3>Windshields</h3>
                <br>
                <a href="windshield.php" class="details">Views Details</a>
                <a href="service_book.php" class="btn">Book Now </a>
            </div>
            <!-- Box 6 -->
            <div class="box col-md-3">
                <img src="img/car_service_28.jfif" alt="">
                <h3>Car Inspections</h3>
                <br>
                <a href="carinspection.php" class="details">Views Details</a>
                <a href="service_book.php" class="btn">Book Now </a>
            </div>
        </div>
        
    </section>
    
        
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <div class="footer-container container">
            <div class="footer-box">
                <a href="#" class="logo">Radhe  <span>Group</span></a>
                    <div class="social">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                    </div>
            </div>
            <div class="footer-box">
                <h3>Page</h3>
                <a href="home.php">Home</a>
                <a href="carsale.php">Cars</a>
                <a href="service.php">Service</a>
                <a href="help.php">Help</a>
                <a href="about.php">About</a>
                <a href = "feedback-and-reviews.php">Feedback and Reviews </a>
            </div>
            <div class="footer-box">
                <h3>Legal</h3>
                <a href="privacy.php">Privacy</a>
                <a href="servicepolicay.php">Service Policy</a>
                <a href="cookie.php">Cookie Policy</a>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <p>Phone Number : +919687265753</p>
                <p>Emial : radhegroup@gmail.com</p>
                <p>Ahmedabad</p>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; Radhe Group All Right Reserved</p>
    </div>
    <!-- link to js -->
    <script src="home.js"></script>
</body>
</html>