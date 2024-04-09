<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Inquiry Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
        color: #333;
    }
    form {
        margin-top: 20px;
    }
    label {
        display: block;
        margin-bottom: 8px;
        color: #333;
    }
    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }
    textarea {
        height: 100px;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #00aaff;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #0077cc;
    }
</style>

</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$pass = "";
$database = "cars";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $carmodel = isset($_GET['car']) ? $_GET['car'] : '';
    $message = $_POST["message"];

    $conn = mysqli_connect($servername, $username, $pass, $database);

    if (!$conn) {
        die("error" . mysqli_connect_error());
    }

   
    $sql1 = "INSERT INTO `cars_inquary` (`Customer Name`,`Customer Email Id`,`Car Model Name`,`Message`) VALUES ('$name','$email','$carmodel','$message')";

    $result = mysqli_query($conn, $sql1);

    if ($result) {
        echo "Thank you for your inquiry. You will receive a call within the next 24 hours.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

<div class="container">
    <h2>Car Inquiry Form</h2>
    <form action="submit_inquary.php" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>
       
        <label for="email">Your Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" ></textarea>

        <input type="submit" value="Submit Inquiry">
    </form>
</div>

</body>
</html>
