<?php 

$showalert = false;
// Connect to your database (replace with your connection details)
$servername = "localhost";
$username = "root";
$pass = "";
$database = "users2810";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input
    $sno = $_POST['sno'];
    // Sanitize the input to prevent SQL injection (consider using prepared statements for better security)
    $sno = filter_var($sno, FILTER_SANITIZE_NUMBER_INT);
    

    // Create connection
    $conn = new mysqli($servername, $username, $pass, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to delete the entry with the given SNO
    $sql = "DELETE FROM users WHERE sno = $sno";
    
    if ($conn->query($sql) === TRUE) {
        $showalert = true;
    } else {
        echo "record not found ";
    }

    $conn->close();
}
?>

<!doctype Html>
<html>

<head>
    <title>Remove user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #acaca4;
    margin: 0;
    padding: 0;
}

.container {
    margin: 20px auto;
    padding: 20px;
    background-color: #fff; /* White container background */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow effect */
    width: 60%; /* Adjust width as needed */
}

.info {
    text-align: center;
}

h2 {
    margin-bottom: 20px;
    /* margin-top: 100px; */
}

.delete input[type="text"] {
    width: 50%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ced4da; /* Gray border */
    border-radius: 5px;
    box-sizing: border-box;
}

.delete input[type="submit"] {
    background-color: #007bff; /* Blue button */
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.delete input[type="submit"]:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

.alert {
    margin-top: 20px;
}

/* Close button for alerts */
.close {
    font-size: 20px;
    font-weight: bold;
    color: #000;
    opacity: 0.5;
    transition: opacity 0.3s;
}

.close:hover {
    opacity: 1;
}


</style>



<body>
    <?php include 'nav.php' ?>
    <div class="main_content">
        <div class="info">
            <br><br><br>
            <h2>Remove user from database </h2>
            <form action="removeuser.php" method="POST">
                <div class="delete">
                    <label><b>Enter SNO Number </b></label><br>
                    <input type="text" id="sno" name="sno" placeholder="Enter sno Number"><br>
                    <input type="submit" value="Delete">
                </div>
            </form>

            <?php 
           
           if($showalert){
            echo '
             <div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>Success!</strong> Record has been Deleted Successfully!
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
             </button>
   </div>';
           }
        ?>
        </div>
    </div>
</body>

</html>
