<?php 
$showalert = false;
$showerror = false;
$servername = "localhost";
$username = "root";
$pass = "";
$database = "car sales and service";

$conn = mysqli_connect($servername, $username, $pass, $database);
// Check connection
if (!$conn) {
    die("Sorry, connection failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $emailid = $_POST['email'];
    $phonenumber = $_POST['Phone_Number'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `inquary_table` (`Name`, `Phone Number`, `Email_Id`, `Message`) VALUES ('$name', '$phonenumber', '$emailid', '$message')";


    if(mysqli_query($conn,$sql)){

        $showalert = true;
    }
    else{
        $showerror = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Contact Us</title>
</head>

<style>
    body {
    /* background-color: #f4f4f4; */
   
    background-image: url("img/contactus_1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Arial', sans-serif;
    margin: 10px auto;
    padding: 0;
    background-size: 100% 100%;
}

.contact-container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: transparent;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

h1 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 10px;
}

input,
textarea {
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #007BFF;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.contact-info {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: transparent;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

.info-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

img {
    width: 20px;
    height: 20px;
    margin-right: 10px;
}

p {
    margin: 0;
}


/* Additional Styles for Contact Page */

/* Adjusted label margin */
label {
    margin-bottom: 10px;
    size: 15px;
    color: black;
}

/* Added focus styles for input and textarea */
input:focus,
textarea:focus {
    outline: 2px solid #007BFF;
}

/* Added box shadow on hover for input and textarea */
input:hover,
textarea:hover {
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
}

/* Improved styling for contact information */
.contact-info h1 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

/* Added border-bottom to info-item */
.info-item {
    color:red;
    border-bottom: 1px solid #ccc;
    padding-bottom: 10px;
}

</style>

<body>
    <?php include 'nav.php' ?>
<br><br>
<?php 
          
          if($showalert){
           echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your Message Sent Successfully...
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
    <br>
    <div class="contact-container">
        <h1>Contact Us</h1>
        <form action="contact-us.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for = "Phone Number">Phone Number </label>
            <input type = "Phone_Number" id = "Phone_Number" name = "Phone_Number" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="contact-info">
        <h1>Contact Information</h1>
        <div class="info-item">

            <p>Email: radhegroup@gmail.com</p>
        </div>
        <div class="info-item">

            <p>Phone: +91 96872 65753</p>
        </div>
        <div class="info-item">

            <p>Address: 123 Radhe Street, Ahmedabad, Gujarat</p>
        </div>
    </div>
</body>

</html>
