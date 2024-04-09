<?php 
include 'nav.php';

$servername = "localhost";
$username = "root";
$pass = "";
$database = "cars";

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
    

    // Delete record from the selected table
   $sql = "DELETE FROM `$selected_table` WHERE id = $id";


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
    <title>Admin Panel - Delete Record</title>
    <link rel="stylesheet" href="iud.css">
</head>

<body>
<div class="container">
        <h1>Delete Car</h1>
        <form action="cardelete.php" method="post">
            <label for="tables">Choose a table:</label>
            <select id="tables" name="tables">
                <option value="">Select...</option>
                <option value="audi">Audi</option>
                <option value="bmw">BMW</option>
                <option value="honda">Honda</option>
                <option value="hyundai">Hyundai</option>
                <option value="jeep">Jeep</option>
                <option value="kia">Kia</option>
                <option value="mahindra">Mahindra</option>
                <option value="maruti_suzuki">Maruti Suzuki</option>
                <option value="mercedes-benz">Merecdes-Benz</option>
                <option value="mini">Mini</option>
                <option value="nissan">Nissan</option>
                <option value="renault">Renault</option>
                <option value="skoda">Skoda</option>
                <option value="tata">Tata</option>
                <option value="toyota">Toyota</option>
            </select>
            <br><br>
            <label for="service_id">Enter Service id:</label>
            <input type="text" id="service_id" name="service_id">
            <input type="submit" value="Delete Record">
        </form>
    </div>
</body>

</html>
