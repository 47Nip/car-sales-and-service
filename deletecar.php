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

// Check if form is submitted for deletion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $car_id = $_POST['car_id']; // Assuming you have a hidden input for car ID in the form
    
    // Delete query
    $sql = "DELETE FROM `car_company` WHERE `car_company_id`='$car_id'";

    if (mysqli_query($conn, $sql)) {
        echo "Company deleted successfully";
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
        <form action="deletecar.php" method="post">
        <label for="car)idk">Company ID:</label>
            <input type="text" id="car_id" name="car_id" > <!-- Hidden input for car ID -->
            
            <p>Are you sure you want to delete this record?</p>
            <input type="submit" value="delete">
            
        </form>
    </div>
</body>

</html>
