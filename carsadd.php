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
    $car_name = $_POST["car_name"];
    $car_link = $_POST["car_link"];
    $car_img = $_POST["car_img"];
    

    // Insert data into the selected table
    $sql = "INSERT INTO $selected_table (`name`,`img_url`,`car_link`) VALUES ('$car_name','$car_img','$car_link')";

    if (mysqli_query($conn, $sql)) {
        echo "New car inserted successfully";
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
        <h1>Add New Car</h1>
        <form action="carsadd.php" method="post">
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
            <label for="Car Name">Enter Car Name:</label>
            <input type="text" id="car_name" name="car_name" required>

            <label for="car_link">Car Page Link:</label>
            <input type="text" id="car_link" name="car_link" required>

            <label for="service_name">Cars Img:</label>
            <input type="text" id="car_img" name="car_img" required>

            

            <input type="submit" value="Add Record">
        </form>
    </div>
</body>

</html>
