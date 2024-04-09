<!DOCTYPE html>
<html>

<head>
    <title>Help - Car Sales and Service</title>
    <style>
        body {
            /* background-color: #b3e6ff; */
            background-image: url("img/helpbg_2.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            font-size: 100% 100%;
            
        }

        h1 {
            text-align: center;
            color:black
        }

        .help-sections {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }

        .help-section {
            width: 48%;
            padding: 20px;
            border: 2px solid black;
            background-color: transparent;
            border-radius: 5px;
        }

        h2,p {
            color:black;
        }

        p {
            margin-bottom: 15px;
        }

        a {
            color: blue;
            text-decoration: none;
            display: block;
            margin-top: 10px;

        }

        a:hover {
            text-decoration: underline;
            color: #000066;
        }
    </style>
</head>

<body>
    <?php include('nav.php') ?><br><br><br><br>

    <h1>Help Center</h1>

    <div class="help-sections">

        <div class="help-section">
            <h2>Sales Support</h2>
            <p>Get help with purchasing a vehicle, financing, and general sales questions.</p>
            <br><br>
            <p>Call This Number Our Sales Customer Care Give all Problem Solution <b>1800 2525 3232</b></p> 
        </div>

        <div class="help-section">
            <h2>Service and Repairs</h2>
            <p>Find support for booking appointments, checking repair status, and service needs.</p>
            <a href="schedule-service.php">Issue with booking appointment</a><br><br>
            <a href="service_status.php">Checking service status</a><br><br>
            <a href="service_inquary.php">Inquiry about our car service</a>
        </div>

    </div>

    <div class="help-sections">

        <div class="help-section">
            <h2>Account Assistance</h2>
            <p>Get help with account access, profile information, and general account issues.</p>

            <p>Call This Number Our Techinal Team Give your Problem Solution <b>1800 4045 5060 </b></p>
        </div>

        <div class="help-section">
            <h2>Contact Us</h2>
            <p>Have a question not answered here? Reach out to our customer support team.</p>
            <a href="contact-us.php">Contact our team</a>
            <p>You can also call this number <b>1800 3245 5040</b></p>
        </div>

    </div>

</body>

</html>
