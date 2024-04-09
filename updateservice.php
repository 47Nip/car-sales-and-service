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
    $id = $_POST['service_id'];
    $service_name = $_POST["service_name"];
    $service_header = $_POST["service_header"];
    $service_img = $_POST["service_img"];
    $warranty = $_POST["warranty"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    // Insert data into the selected table
    $sql = "UPDATE $selected_table SET `service_name` = '$service_name', `header` = '$service_header', `img_url` = '$service_img',`warranty` = '$warranty', `Description` = '$description', `price` = '$price' WHERE service_id = $id";


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
    <title>Admin Panel - Update Record</title>
    <link rel="stylesheet" href="iud.css">
</head>

<body>
<div class="container">
        <h1>Update Service</h1>
        <form action="updateservice.php" method="post">
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
        <label for="service_id">Enter Service id:</label>
            <input type="text" id="service_id" name="service_id" >

            <label for="service_name">Service Name:</label>
            <input type="text" id="service_name" name="service_name" >

            <label for="service_name">Service Header:</label>
            <input type="text" id="service_header" name="service_header" >

            <label for="service_name">Service Img:</label>
            <input type="text" id="service_img" name="service_img" >

            <label for="warranty">Warranty:</label>
            <input type="text" id="warranty" name="warranty" >

            <label for="description">Description:</label>
            <input type="text" id="description" name="description" size="50">

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" >

            <input type="submit" value="update record">
        </form>
    </div>
</body>

</html>
