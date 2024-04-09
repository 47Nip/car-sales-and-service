<?php
$showalert = false;
$showerror = false;

$servername = "localhost";
$username = "root";
$password = ""; // Use your actual database password here
$database = "car sales and service"; // Use your actual database name here

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $license = $_POST['license'];
    $model = $_POST['model'];
    $date = $_POST['date'];

    // Prepare SQL query to insert data into the database
    $sql = "INSERT INTO `test drive booking table` (`Car Model_Name`, `Driving License`, `Phone No`, `Test Drive Date And Time`, `Customer Name`, `Email Id`)
            VALUES ('$model', '$license', '$phone', '$date', '$name', '$email')";

    // Execute SQL query
    $result = mysqli_query($conn,$sql);

    if($result){
       $showalert = true;
    } else {
        $showerror = true;
    }
}

// Close connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Drive Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 70%;
            margin-top: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus,
        textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    
    <?php include 'nav.php' ?>
    <br><br><br><br><br><br>
    <?php if($showalert){
           echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> your Test Drive Appotiment is Now Book 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
            </button>
  </div>';
  }
         if($showerror){
            echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please Fill all the feild...
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>';
}
?>
    <div class="container">
        <h2>Test Drive Booking Form</h2>
        <form action="test_drivebook.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
            </div>
            <div class="form-group">
                <label for="license">Driver's License Number:</label>
                <input type="text" id="license" name="license" required>
            </div>
            <div class="form-group">
                <label for="model">Enter Car Model Name:</label>
                <input type="text" id="model" name="model" required>
            </div>
            <div class="form-group">
                <label for="date">Preferred Date:</label>
                <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
   

</body>
</html>
