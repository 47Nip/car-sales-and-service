<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['username'])) {
    // Redirect to login page with an error message
    header("location: Adminlogin.php?error=You must log in to access this page.");
    exit;
}

$servername = "localhost";
$username = "root";
$pass = "";
$database = "car sales and service";

$conn = mysqli_connect($servername, $username, $pass, $database);
// Check connection
if (!$conn) {
    die("Sorry, connection failed: " . mysqli_connect_error());
}

$sql = "SELECT SUM(Payment_Amount) AS total_sum FROM `payment table`"; // Modified SQL query to calculate the sum and alias it as 'total_sum'
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $total_sum = $row['total_sum'];
}

$sql = "SELECT COUNT(Appointment_Id) AS total_service FROM `service appointment table`";
$result = mysqli_query($conn,$sql);

if ($result && mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    $total_service = $row['total_service'];
}

$sql = "SELECT SUM(price) AS total_price FROM `order table`";
$result = mysqli_query($conn,$sql);

if($result && mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    $total_price = $row['total_price'];
}
?>
<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="Admin.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Include Chart.js library -->
    <title>Admin Dashboard</title>
</head>

<body>
    <?php include 'nav.php' ?>

    <!-- main start -->
    <div class="main_content">
        <div class="info">
            <main>
                <h1>Dashboard</h1>
                <div class="date">
                    <input type="date">
                </div>

                <div class="insights">


                    <!-- sales -->
                    <div class="sales">
                        <span class="material-symbols-outlined">directions_car</span>
                        <div class="middle">
                            <div class="left">
                                <h3>total Car  Sales </h3>
                                <h1><?php echo "₹" .$total_price; ?></h1>
                            </div>
                            
                        </div>
                        <small>Last 3 Months</small>
                    </div>
                    <!-- sales end -->

                    <!-- expencs -->
                    <div class="expenses">
                        <span class="material-symbols-outlined">car_repair</span>
                        <div class="middle">
                            <div class="left">
                                <h3>total Car Service </h3>
                                <h1><?php echo $total_service ?> </h1>
                            </div>
                            
                        </div>
                        <small>Last 3 Months</small>
                    </div>
                    <!-- expences end -->
                    <!-- imcome -->
                    <div class="income">
                        <span class="material-symbols-outlined">stacked_line_chart</span>
                        <div class="middle">
                            <div class="left">
                                <h3> Income </h3>
                                <h1><?php  echo $total_sum ?></h1>
                            </div>
                           
                        </div>
                        <small>Last 3 Months</small>
                    </div>
                    <!-- income end -->

                </div>
                <!-- end insights -->

                <!-- start recent order -->
                <div class="recent_order">
                    <h1>Recent Car Service </h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Car Name </th>
                                <th>Service Name </th>
                                <th>Payment </th>
                                <th>Status </th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>Tata Punch </td>
                                <td>Car Wash</td>
                                <td>Due</td>
                                <td class="waring">Pending</td>
                                
                            </tr>
                            <tr>
                                <td>kia Sonet </td>
                                <td>Car Repair</td>
                                <td>Done</td>
                                <td class="waring">Done</td>
                                
                            </tr>
                            <tr>
                                <td>Toyota Fortuner</td>
                                <td>Sos Service</td>
                                <td>Due</td>
                                <td class="waring">Done</td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>

        </div>

        <script src="admin.js"></script>
    </div>
    </div>
</body>

</html>
