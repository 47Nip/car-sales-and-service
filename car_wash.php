<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
   
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
    <?php
    include 'nav.php';
        $servername = "localhost";
        $username = "root";
        $pass = "";
        $database = "car sales and service";

        $conn = mysqli_connect($servername,$username,$pass,$database);

        if(!$conn)
        {
            die("error" .mysqli_connect_error());
        }

        $sql = "SELECT * FROM car_wash";

        $result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br><br><br><br>";
        echo "<div class = 'container'>";
        echo "<h3>" .$row["service_header"] . "</h3>";
        echo "<div class ='box'>";
        echo "<img src ='".$row["img_url"] ."'>";
        echo "<div class = 'contact-info'>";
        echo "<h3>" .$row["service_name"] . "</h3>";
        echo "<ul>";
        echo "<li> - " .$row["warranty"] . "</li>";
        echo "</ul>";
        echo "<p>";
$details = explode(",", $row["service_details"]); // Split the string by comma
foreach ($details as $detail) {
    echo "<span style='color: green;'>&#10004;</span> " . trim($detail) . "<br>"; // Output each item on a new line
}
echo "</p>";
        echo "<div class='fes1'>";
        echo "<a href = '" .$row["book_page"] . "'class='btn'>Book Now</a>";
        echo "<h4>" .$row["price"] . "</h4>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No services found";
}

$conn->close();
    ?>
</body>
</html>