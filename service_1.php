<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Wash</title>

    <style>
        body {
            background-image: url('img/hero-bg.jpg');
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
        }
        .container h3{
            color:#f4f4f4;
        }

        .box {
            display: flex;
            border: 1px solid #ccc;
            background-color: #f4f4f4;
            margin: 20px 0;
            padding: 20px;
            box-sizing: border-box;
            color: cornflowerblue;
        }

        .box img {
            max-width: 35%;
            max-height: 95%;
            margin-right: 15px;
        }

        .contact-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .contact-info h3 {
            margin-bottom: 10px;
            color:blue;
        }

        .contact-info ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-info li {
            color: green;
        }

        .fes1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .btn {
            background-color: #007BFF;
            color: #fff;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }
        
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include "nav.php" ?>
    <div class="container">
        <br><br><br><br>
        <h3>Festive special </h3>
        <div class="box">
            <img src="img/car-service-1.webp" width="200px" height="200px">
            <div class="contact-info">
                <h3>360&deg; Deep Cleaning</h3>
                <ul>
                    <li> - 1 Month Warranty &nbsp;&nbsp; - brand New festive Look</li>
                </ul>

                <p><span style="color: green;">&#10004;</span> Exterior Rubbing & Polishing &nbsp; &nbsp;<span style="color: green;">&#10004;</span> Interior Wet Shampooing & Detailing</p>
                <p><span style="color: green;">&#10004;</span> Interior Vacuum Cleaning &nbsp; &nbsp;&nbsp;&nbsp; <span style="color: green;">&#10004;</span> Pressure Washing</p>
                <p> <span style="color: green;">&#10004;</span> Tyre Dressing & Alloy Polishing &nbsp; &nbsp;&nbsp; </p>
                <div class="fes1">
                    <a href="service_book.php" class="btn">Book Now</a>
                    <h4>2499</h4>
                </div>
            </div>
        </div>
        <br><br>
        <h3>Spa </h3>
        <div class="box">
            <img src="img/car_service_2.jfif" width="200px" height="200px">
            <div class="contact-info">
                <h3>Car Interior Spa</h3>
                <ul>
                    <li> - Every 3 months (Recommended) </li>
                </ul>

                <p><span style="color: green;">&#10004;</span> Pressure Car Wash &nbsp; &nbsp;<span style="color: green;">&#10004;</span> Anti Viral & bacterial treatment</p>
                <p><span style="color: green;">&#10004;</span> Interior Vacuum Cleaning &nbsp; &nbsp;&nbsp;&nbsp; <span style="color: green;">&#10004;</span> dashboard Polishing</p>
                <p> <span style="color: green;">&#10004;</span> Interior Wet Shampooing And Detailing &nbsp; &nbsp;&nbsp; </p>

                <div class="fes1">
                    <a href="service_book.php" class="btn">Book Now</a>
                    <h4>1499</h4>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="img/car_service_3.jfif" width="200px" height="200px">
            <div class="contact-info">
                <h3>premium top Wash</h3>
                <ul>
                    <li> - Applicable on Walk-in Only &nbsp;&nbsp;&nbsp; - Preserving paint & Finish </li>
                </ul>

                <p><span style="color: green;">&#10004;</span> Exterior Top Wash &nbsp; &nbsp;<span style="color: green;">&#10004;</span> Rinsing</p>
                <p><span style="color: green;">&#10004;</span> Hand Drying &nbsp; &nbsp;&nbsp;&nbsp; <span style="color: green;">&#10004;</span> tyre External Wash</p>

                <div class="fes1">
                    <a href="service_book.php" class="btn">Book Now</a>
                    <h4>199</h4>
                </div>

            </div>
        </div>

        <div class="box">
            <img src="img/car_service3.jfif" width="200px" height="200px">
            <div class="contact-info">
                <h3>Car Rubbing & Polishing</h3>
                <ul>
                    <li> - Takes 6 hours </li>
                </ul>

                <p><span style="color: green;">&#10004;</span> Machine Rubbing with Compound &nbsp; &nbsp;<span style="color: green;">&#10004;</span> Wax Polishing</p>
                <p><span style="color: green;">&#10004;</span>Pressure car Wash &nbsp; &nbsp;&nbsp;&nbsp; <span style="color: green;">&#10004;</span> tyre Dressing</p>
                <p><span style="color: green;">&#10004;</span>Alloy Polishing </p>

                <div class="fes1">
                        <a href="service_book.php" class="btn">Book Now</a>
                        <h4>2199</h4>
                        
                </div>


            </div>
        </div>

    </div>

    <script src="home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
