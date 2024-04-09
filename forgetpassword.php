<?php
session_start();
$servername = "localhost";
$username = "root";
$pass = "";
$database = "users2810";

$conn = mysqli_connect($servername,$username,$pass,$database);

if(!$conn)
{
    die("error" .mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];

    $sql = "SELECT `emailid` FROM users WHERE `emailid` = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        header("Location: forgotpage.php");
    } else {
        echo "Email not found in the database. Please try again.";
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 100px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.forgot-password-form {
    text-align: center;
}

.forgot-password-form h2 {
    margin-bottom: 20px;
    color: #333;
}

.forgot-password-form p {
    margin-bottom: 20px;
    color: #666;
}

input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

</style>

<body>
    <div class="container">
        <form action="forgetpassword.php" method="POST" class="forgot-password-form">
            <h2>Forgot Your Password?</h2>
            <p>Enter your email address below to reset your password.</p>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <button type="submit">Reset Password</button>

            

        </form>
    </div>
    <
</body>

</html>

