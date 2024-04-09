<!doctype html>
<html>
    <head>
        <title>
            About Page
        </title>
        <style>
body {
    background-image: url("img/contactus_1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-size: 100% 100%;
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    background-attachment: fixed;
    
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

nav {
    background-color: #333;
    color: white;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.about-section {
    padding: 20px;
}

h2, h3, h4 {
    color: black;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

p {
    color: #555;
    
}

.achievements {
    display: flex;
    justify-content: space-between;
}

.achievement-item {
    flex: 1;
    padding: 20px;
    margin: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.achievement-item img {
    max-width: 100%;
    max-height: 200px; /* Set the maximum height for the images */
    width: auto;
    height: auto;
    border-radius: 8px;
    margin-top: 20px;
}

.contact-info {
    display: flex;
    justify-content: space-between;
}

.info-item {
    flex: 1;
    padding: 20px;
    margin: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 20px;
    position: fixed;
    bottom: 0;
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}


        </style>
    </head>
    <body>
        <?php include "nav.php" ?>
        <br><br><br><br>
        <section class = "about-section">
            <div class = "container">
                <h2>About  Radhe group </h2>
                <p>Welcome to Radhe Group , where excellence meets innovation , As a leading enity in our industry, we take pride in delivering top-notch services and products that cater to the diverse needsof our customers. </p>
                <br><p>At Radhe Group, we belive in creating lasting relationships with our clients , built on trust, integrity , and exceptional  service. our commitment to excellence extends across every facet of our operations, ensuring that your experience with us is nothing short of remarkable. </p>
                <br><p>With a focus on innovation and a customer-centric approach, we aim to set new standards in our industry. Our dedicated team, comprised of skilled professionals, works tirelessly to provide solutions that exceed expectations.</p>

            <br><p>Thank you for choosing Radhe Group. We look forward to serving you and being your preferred partner on your journey towards success.</p>
            <br>
            <h3>Achievements and Recognition</h3>
            <div class = "achievements">
                <div class = "achievement-item">
                    <h4>Industry Excellence Award </h4>
                    <img src = "img/about_1.jfif" >
                    <p>Received the Industry Excellence Award for outstanding contributions and innovations in our field . </p>

                </div>
                <div class = "achievement-item">
                    <h4>Customer Satisfaction Award </h4>
                    <img src = "img/about_2.jfif">
                    <p>Acknowledged for achieving high levels of customer satisfaction and loyalty over the years. </p>

                </div>
            </div>
            <h3>Contact Information</h3>
            <div class = "contact-info">
                <div class = "info-item">
                    <h4>Adreess</h4>
                    <p>123 Radhe Street , Ahmedabad, Gujarat </p>
                </div>
                <div class = "info-item">
                    <h4>Email</h4>
                    <p>radhegroup@gmail.com</p>
                </div>
                <div class ="info-item">
                    <h4>Phone</h4>
                    <p>+91 9687265753 </p>
                </div>
            </div>
        </div> 
        </section>
        <br><br>
        <footer>
            <p>&copy; 2024 Radhe group. All rights reserved. </p>
        </footer>

    </body>
</html>