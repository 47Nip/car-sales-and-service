
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<style>
        /* Styles for the form */
form {
    max-width: 400px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    /* Adjusting font and color */
    font-size: 16px;
    color: #333;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    /* Adjusting font and color */
    font-size: 16px;
}

button[type="submit"]:hover {
    background-color: #45a049;
}

/* Styles for the password fields */
#password {
    display: none;
}

#password input {
    margin-bottom: 10px;
}

    </style>
<body>
    <form action="forgotpage.php" method="POST">
        <div class="form-group">
            <select id="securityQuestion" name="securityQuestion">
                <option value="" disabled selected>Select a security question</option>
                <option value="mother_maiden">What is your mother's maiden name?</option>
                <option value="first_pet">What is the name of your first pet?</option>
                <option value="birth_city">What city were you born in?</option>
                <option value="favorite_movie">What is your favorite movie?</option>
                <option value="favorite_teacher">What is the name of your favorite teacher?</option>
            </select>
        </div>
        <div class="form-group" id="extraField">
            <input type="text" name="extraFieldInput" placeholder="Enter Your Answer">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
session_start();
$servername = "localhost";
$username = "root";
$pass = ""; // Consider using a more secure password in production
$database = "users2810";

$conn = mysqli_connect($servername, $username, $pass, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["securityQuestion"])) {
        $securityquestion = $_POST["securityQuestion"];
        $answer = $_POST["extraFieldInput"];

        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email']; // Get email from session variable
        } else {
            echo "Email not found in the session. Please go back and try again.";
            exit; // Stop further execution
        }

        $sql = "SELECT `securtyquestion`, `answer` FROM users WHERE `securtyquestion` = '$securityquestion' AND `answer` = '$answer' AND `emailid` = '$email'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } else {
            if (mysqli_num_rows($result) > 0) {
                echo "<form action='forgotpage.php' method='POST'>";
                echo "<input type='hidden' name='email' value='$email'>";
                echo "<input type='password' name='newPassword' placeholder='New Password'><br><br>";
                echo "<input type='password' name='confirmPassword' placeholder='Confirm Password'><br>";
                echo "<button type='submit'>Submit</button>";
                echo "</form>";
            } else {
                echo "Record not found. Please try again.";
            }
        }
    } elseif (isset($_POST["newPassword"])) {
        $newpass = $_POST["newPassword"];
        $cnewpass = $_POST["confirmPassword"];
        $email = $_POST["email"];

        if ($newpass == $cnewpass) {
            $hash = password_hash($newpass, PASSWORD_DEFAULT);

            $sql = "UPDATE `users` SET `password` = '$hash' where `emailid` = '$email'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Password changed successfully.";
            } else {
                echo "Failed to change password. Please try again.";
            }
        } else {
            echo "Passwords do not match. Please try again.";
        }
    }
}
?>