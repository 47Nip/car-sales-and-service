<?php
session_start();

$login = false;
$showerror = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';


    $username = $_POST["username"];
    $password = $_POST["password"];

    $servername = "localhost";
    $username2 = "root";
    $password2 = "";
    $database2 = "car sales and service";
    $conn2 = mysqli_connect($servername,$username2,$password2,$database2);
    if(!$conn)
    {
        die("error".mysqli_connect_error());
    }

    // Check if the user is a regular user
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($password, $row['password'])) {
        $login = true;
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit;
    } else {
        // Check if the user is an employee
        $sql1 = "SELECT * FROM `employee table` WHERE `username`='$username'";
        $result1 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result1);
        if ($row1 && password_verify($password, $row1['password'])) {
            $login = true;
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("Location: ../Employee/home.php");
            exit;
        } else {
            // Check if the user is an admin
            $sql2 = "SELECT * FROM `admin_table` WHERE `username`='$username'";
            $result2 = mysqli_query($conn2, $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            if ($row2 && password_verify($password, $row2['password'])) {
                $login = true;
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                header("Location: ../Admin/admin.php");
                exit;
            } else {
                $showerror = "Invalid username or password";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css">
    <style>

    </style>
</head>

<body>
    <?php 
    if($login){
        echo '
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    ?>
    <?php 
    if($showerror){
        echo '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showerror. '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    ?>
    <div class="container">
        <h1>Login To Our Website</h1>
        <div class="photo">
            <img src="img\admin1.png" alt="Adminlogo" height="80px" width="80px">
        </div>
        <form action="login.php" method="post">
            <!-- <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email id" required>
            </div> -->
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                    required>
            </div>
            <div class="button">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <div class="sign">
                    <a href="signup.php">New user! Create Account</a>
                </div>
                <div class="forget">
                    <a href="forgetpassword.php">Forgot Password!!</a>
                </div>
            </div>
    </div>
    </form>
    </div>
</body>

</html>
