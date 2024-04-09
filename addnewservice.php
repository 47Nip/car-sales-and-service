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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve selected table name from the dropdown list
    $selected_table = $_POST["tables"];

    // Retrieve form data
    $service_name = $_POST["service_name"];
    $service_header = $_POST["service_header"];
    $service_img = $_POST["service_img"];
    $warranty = $_POST["warranty"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    // Insert data into the selected table
    $sql = "INSERT INTO $selected_table (`service_name`, `header`, `img_url`, `warranty`, `Description`, `price`) VALUES ('$service_name', '$service_header', '$service_img', '$warranty', '$description', '$price')";

    if (mysqli_query($conn, $sql)) {
        echo "New service inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="iud.css">
</head>

<body>
    <div class="container">
        <h1>Add New Car Service</h1>
        <form action="addnewservice.php" method="post">
        <label for="tables">Choose a table:</label>
        <select id="tables" name="tables">
            <option value = "">Select...</option>
            <option value="car_wash">car_wash</option>
            <option value="regular_car_service">regular_car_service</option>
            <option value="repair_car">repair_car</option>
            <option value="car_sos">car_sos</option>
            <option value="car_windshield">car_windshield</option>
            <option value="car_inspection">car_inspection</option>
        </select>
        <br><br>
            <label for="service_name">Service Name:</label>
            <input type="text" id="service_name" name="service_name" required>

            <label for="service_name">Service Header:</label>
            <input type="text" id="service_header" name="service_header" required>

            <label for="service_name">Service Img:</label>
            <input type="text" id="service_img" name="service_img" required>

            <label for="warranty">Warranty:</label>
            <input type="text" id="warranty" name="warranty" required>

            <label for="description">Description:</label>
            <input type="text" id="description" name="description" size="50"required>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>

            <input type="submit" value="Add Record">
        </form>
    </div>
</body>

</html>
