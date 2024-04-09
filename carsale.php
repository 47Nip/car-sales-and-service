<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Sale and Services</title>

    <!-- Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
        }

        .heading {
            text-align: center;
            margin-bottom: 20px;
        }

        .heading span {
            font-size: 24px;
            color: #333;
        }

        .heading h2 {
            margin-top: 10px;
            color: #555;
            text-transform: uppercase;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin: 0 auto;
            width: 80%;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .box a {
            width: calc(33.33% - 20px);
            margin: 10px;
            text-align: center;
            text-decoration: none;
            color: #333;
            transition: transform 0.3s ease-in-out;
        }

        .box a:hover {
            transform: scale(1.20);
        }

        .box img {
            width: 50%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .box p {
            padding-top: 10px;
            margin: 0;
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <?php include 'nav.php';
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $database = "cars";
    
    $conn = mysqli_connect($servername,$username,$pass,$database);
    
    if(!$conn)
    {
        die("error" .mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM car_company";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<section class='cars' id='cars'>";
        echo "<div class='heading'>";
        echo "<span>All Cars </span>";
        echo "<h2>We have this company's cars </h2>";
        echo "</div>";
        echo "<div class='box'>"; // Start the container for car logos
        
        while($row = $result->fetch_assoc()) {
            echo "<a href='" . $row["cars_link"] . "'>";
            echo "<img src='" . $row["logo_img_url"] . "' alt='" . $row["comapny_name"] . "'>";
            echo "<p>" . $row["comapny_name"] . "</p>";
            echo "</a>";
        }
        
        echo "</div>"; // Close the container
        echo "</section>"; // Close the section
    } else {
        echo "No cars found";
    }
    
    $conn->close();
    ?>
</body>

</html>
