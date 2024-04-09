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

// Check if form is submitted for update, then execute the update query
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $car_id = $_POST['car_id']; // Assuming you have a hidden input for car ID in the form
    $cars_link = $_POST['cars_link'];
    $logo_url = $_POST['logo'];
    $company_name = $_POST['company_name'];
    
    // Update query
    $sql = "UPDATE `car_company` SET `cars_link`='$cars_link', `logo_img_url`='$logo_url', `comapny_name`='$company_name' WHERE `car_company_id`='$car_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Company details updated successfully";
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
        <h1>Update Car</h1>
        <form action="updatecar.php" method="post">
        <label for="car)idk">Company ID:</label>
            <input type="text" id="car_id" name="car_id" required> 

            <label for="car page link">Car Page Link:</label>
            <input type="text" id="cars_link" name="cars_link"  >

            <label for="compnay logo">Company  Log Url:</label>
            <input type="text" id="logo" name="logo"  >

            <label for="car name">Car Company Name:</label>
            <input type="text" id="company_name" name="company_name" >

            <input type="submit" value="Update Record">
        </form>
    </div>
</body>

</html>
