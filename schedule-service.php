<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        section {
            background-color:silver;
            margin: 20px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h3 {
            color:black;
        }

        h4 {
            color: black;
        }

        p {
            color: black;
            margin-bottom: 15px;
        }

        strong {
            color:teal;
        }

        ol {
            margin-bottom: 15px;
        }

        ol li {
            margin-bottom: 8px;
        }

        a {
            color: blue;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Add more specific styling for your individual sections or components as needed */
    </style>
    <title>Car Sales and Service Help Center</title>
</head>
<body>

    <?php include('nav.php'); ?>
        <br><br><br>
    <section id="booking-appointment">
        <h3>Booking Appointment</h3>

        <p>Learn how to book appointments for routine maintenance, inspections, or etc...</p>

        <h4>Steps to Schedule a Service:</h4>

        <p>Follow these easy steps to schedule a service for your car:</p>

        <ol>
            <li><strong>if you not login than first login our website</strong></li>

            <li><strong>select our car service page and select your service</strong></li>
            
            <li><strong>after selecting service type you see the price of that service</strong></li>
            
            <li><strong>for booking car service, you make a 200 payment in advance after that booking is done.</strong></li>
            
            <li><strong>if you not make the payment then check your internet connection and try again</strong></li>
            
            <li><strong>if also you cannot book your appointment then contact our customer care on this number<br>
            <b>1800 3245 5040</b></strong></li>
        </ol>

        <p>Thank you for choosing Radhe Group for your car service needs! If you have any questions or need assistance, feel free to <br>
        <a href="contact-us.php">contact our service team</a>.</p>
    </section>

    

</body>
</html>
