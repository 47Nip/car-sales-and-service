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

    $cars_link = $_POST['cars_link'];
    $logo_url = $_POST['logo'];
    $company_name = $_POST['company_name'];
    
    // Insert data into the selected table
    $sql = "INSERT INTO `car_company` (`cars_link`,`logo_img_url`,`comapny_name`) VALUES ('$cars_link','$logo_url','$company_name')";

    if (mysqli_query($conn, $sql)) {
        echo "New Comapny inserted successfully";
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
        <h1>Add New Car </h1>
        <form action="addcar.php" method="post">
        
        
        
            <label for="car page link">Car Page Link:</label>
            <input type="text" id="cars_link" name="cars_link" required>

            <label for="compnay logo">Company  Log Url:</label>
            <input type="text" id="logo" name="logo" required>

            <label for="car name">Car Company Name:</label>
            <input type="text" id="company_name" name="company_name" required>
            

            <input type="submit" value="Add Record">
        </form>
    </div>
</body>

</html>
