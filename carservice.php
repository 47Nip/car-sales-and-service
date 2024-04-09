<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* Styling for service section */
        /* Styling for service section */

body {
    background-image: url('img/hero-bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}

.parts-container {
    display: flex;
    justify-content: space-around; /* Adjust this value to control the space between boxes */
    flex-wrap: wrap; /* Allow wrapping to the next line if needed */
}

/* Styles for the boxes */
.parts-container .box {
     text-align: center; 
    padding: 5px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    margin: 5px;
    flex: 1; /* Distribute available space evenly among boxes */
}

.parts-container .box img {
    /* max-width: 50%;
    height: 200px; */
    margin-bottom: 10px;
}

.parts-container .box h3 {
    font-size: 18px;
    margin-bottom: 5px;
}

.parts-container .box span {
    font-size: 16px;
    color: #777;
}

.parts-container .box i {
    font-size: 14px;
    color: black;
    margin-left: 3px;
}

.parts-container .box a {
    font-size: 14px;
    text-decoration: none;
    color: white;
    display: block;
    margin-top: 10px;
}
.btn:hover {
    background-color: #0056b3;
}



    </style>
</head>

<body>
    <?php
    include 'nav.php';
    // Connect to your database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "car sales and service";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from the services table
    $sql = "SELECT * FROM car_service_table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $count = 0;
        while ($row = $result->fetch_assoc()) {
            if ($count % 3 == 0) {
                echo "<section class='parts' id='parts'><br>";
                echo "<div class='parts-container container'><br>";
            }
            echo "<div class='box col-md-4'><br>";
            echo "<img src='" . $row["image_url"] . "' alt=''><br>";
            echo "<h3>" . $row["service_name"] . "</h3><br> ";
            echo "<i class='bx bxs-star'>(" . $row["reviews"] . " Reviews)</i><br>";
            echo "<a href='" . $row["details_page"] . "' class='details'>View Details</a><br>";
            echo "<a href='" . $row["book_page"] . "' class='btn'>Book Now</a><br>";
            echo "</div><br>";
            if ($count % 3 == 2 || $count == $result->num_rows - 1) {
                echo "</div><br>";
                echo "</section><br>";
            }
            $count++;
        }
    } else {
        echo "No services found";
    }

    $conn->close();
    ?>
    <script src="home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
