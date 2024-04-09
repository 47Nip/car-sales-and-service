<?php
session_start();
include 'nav.php';
$showalert = false;
$showerror = false;

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['username'])) {
    // Redirect to login page with an error message
    header("location: login.php?error=You must log in to access this page.");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconnect.php';

    $password = $_POST['currentPassword'];
    $newpass = $_POST['newPassword'];
    $cnewpass = $_POST['confirmNewPassword'];

    $usname = $_SESSION['username'];

    $sql = "SELECT `password` FROM users where username='$usname'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        $showerror = "Error: " . mysqli_error($conn);
    } else {
        $num = mysqli_num_rows($result);

        if ($num == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['password'])) {
                    
                    if ($newpass == $cnewpass) {
                        $hash = password_hash($newpass, PASSWORD_DEFAULT);
                        $update_sql = "UPDATE users SET password = '$hash' WHERE username = '$usname'";
                        $update_result = mysqli_query($conn, $update_sql);

                        if ($update_result) {
                            $showalert = true;
                        
                        } else {
                            $showerror = "Error updating password: " . mysqli_error($conn);
                        }
                    } else {
                        $showerror = "New passwords do not match.";
                    }
                } else {
                    $showerror = true;
                }
            }
        } else {
            $showerror = "User not found or multiple users with the same username.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php
if ($showalert) {
    echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your password has been changed successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}
?>
<?php
if ($showerror) {
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Your Curent Password are wrong Please Check.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}
?>
<form action="changepass.php" method="POST">
    <h2>Change Password</h2>
    <input type="password" id="currentPassword" name="currentPassword" placeholder="Current Password" required><br>
    <input type="password" id="newPassword" name="newPassword" placeholder="New Password" required><br>
    <input type="password" id="confirmNewPassword" name="confirmNewPassword" placeholder="Confirm New Password" required><br>
    <input type="submit" value="Change Password">
</form>
</body>
</html>
