<?php 
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['username'])) {
    // Redirect to login page with an error message
    header("location: login.php?error=You must log in to access this page.");
    exit;
}
$server = "localhost";
$username = "root";
$password = "";
$database = "users2810";

$usname = $_SESSION['username'];
$conn = mysqli_connect($server,$username,$password,$database);

if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}
//email id
$sql = "SELECT emailid FROM users WHERE username = '$usname'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $email = $row['emailid'];
} else {
    $email = "Error fetching email";
}
//birthdate
$sql = "SELECT date_of_birth,country, State, city,mobile_no , sno  FROM users WHERE username = '$usname'";
$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $dob = $row['date_of_birth'];
    $country = $row['country'];
    $state = $row['State'];
    $city = $row['city'];
    $mobileno = $row['mobile_no'];
    $customer_id = $row['sno'];
} else {
    $email = "Error fetching email";
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color:aliceblue;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-top: 50px;
        }

        .container {
            max-width: 800px;
            background-color: #333;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            /* overflow: hidden; */
            padding-top: 50px;
        }

        .profile-header {
           margin-top: 30px;
            background-color:darkgray;
            color: #fff;
            text-align: center;
            padding: 30px 0;
            padding-top: 30px;
        }

        

        .profile-info h2 {
            margin: 0;
            font-size: 28px;
        }

        .profile-info p {
            margin: 10px 0 20px 0;
            font-size: 18px;
        }

        .profile-details {
            padding: 20px;
        }

        h3 {
            color: #ff6600;
            border-bottom: 2px solid #ff6600;
            padding-bottom: 10px;
            font-size: 24px;
        }

        .profile-details p {
            margin: 10px 0;
            font-size: 18px;
        }

        a {
            color: #ff6600;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #cc5200;
        }
    </style>
</head>

<body>
    
    <div class="container">
        <div class="profile-header">
            <!-- <img src="profile-picture.jpg" alt="Profile Picture"> -->
            <div class="profile-info">
                <h2>Welcome Our Website </h2>
                <h2><?php echo $usname; ?></h2>
                <p>Email id :<?php echo $email; ?></p>
                
            </div>
        </div>

        <div class="profile-details">
            <h3><b>Personal Information</b></h3>
            <p><strong> Customer ID :</strong> <?php echo $customer_id; ?> </p>
            <p><strong>Username:</strong> &nbsp;<?php echo $usname; ?><br></p>
            <p><strong>Date of Birth:</strong>&nbsp;<?php echo $dob; ?><br></p><br>
            <p><strong>Location:<br></strong> <br> Country :<?php echo $country; ?>
            <br><br>State : <?php echo $state; ?><br> <br>City : <?php echo $city; ?></p>

            <h3><b>Contact Information<b></h3>
            <p><strong>Phone Number:</strong> <?php echo $mobileno; ?></p>
            
            <h3><b>Additional Details</b></h3>
            <p>if you need any support contact our customer care .
                <br><b>Thank You!! </b>
            </p>

            <p><a href="edit-profile.php">Edit Profile</a></p>
            <P><a href="changepass.php">Change Password</a></P>
            <P><a href = "logout.php">Log out</a></P>
        </div>
    </div>
</body>

</html>
