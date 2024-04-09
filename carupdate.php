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
    $id = $_POST["car_id"];
    $car_name = $_POST["Car_name"];
    $car_link = $_POST["page_link"];
    $car_img = $_POST["car_img"];

    // Insert data into the selected table
    $sql = "UPDATE $selected_table SET `name` = '$car_name', `car_link` = '$car_link', `img_url` = '$car_img'  WHERE id = $id";


    if (mysqli_query($conn, $sql)) {
        echo " car updated successfully";
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
        <h1>update Car</h1>
        <form action="carupdate.php" method="post">
        <label for="tables">Choose a table:</label>
        <select id="tables" name="tables">
        <option value = "">Select...</option>
            <option value="audi">Audi</option>
            <option value="bmw">BMW</option>
            <option value="honda">Honda</option>
            <option value="hyundai">Hyundai</option>
            <option value="jeep">Jeep</option>
            <option value="kia">Kia</option>
            <option value="mahindra">Mahindra</option>
            <option value="maruti_suzuki">Maruti Suzuki</option>
            <option value="mercedes-benz">Merecdes-Banz</option>
            <option value="mini ">Mini</option>
            <option value="nissan">Nissan</option>
            <option value="renault">Renault</option>
            <option value="skoda">Skoda</option>
            <option value="tata">Tata</option>
            <option value="toyota">Toyota</option>
        </select>
        <br><br>
        <label for="car_id">Enter car id:</label>
            <input type="text" id="car_id" name="car_id" >

            <label for="Car_name">Car Name:</label>
            <input type="text" id="Car_name" name="Car_name" >

            <label for="page_link">Enter Car page Link:</label>
            <input type="text" id="page_link" name="page_link" >

            <label for="car_name">Car Img:</label>
            <input type="text" id="car_img" name="car_img" >

           

            <input type="submit" value="update record">
        </form>
    </div>
</body>

</html>
