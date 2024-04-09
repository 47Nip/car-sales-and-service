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
    

    // Insert data into the selected table
   $sql = " DELETE FROM `car_inspection` WHERE service_id = $id";


    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
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
        <h1>Delete Car Service</h1>
        <form action="deleteservice.php" method="POST">
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

            

            <input type="submit" value="delete record">
        </form>
    </div>
</body>

</html>
