<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$database = "car sales and service";

$conn = mysqli_connect($servername, $username, $pass, $database);
// Check connection
if (!$conn) {
    die("Sorry, connection failed: " . mysqli_connect_error());
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Employee Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    /* .content {
        margin-left: 40px;
        padding: 20px;
    } */

    p {
        font-size: 18px;
        margin-bottom: 10px;
    }

    a {
        text-decoration: none;
        color: #007bff;
    }

    h3 {
        color: #333;
        margin-top: 20px;
    }

    .table-container {
        margin-top: 20px;
    }

    table {
        width: 80%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: center;
    }

    th {
        background-color: #333;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    </style>
<body>
    <?php include 'nav.php' ?>
    <div class="main_content">
        <div class="info">
            <h3>Car Service Booking Appointment </h3> <br>
            <div class="table-container">
                <table border="2">
                    <tr>
                        <td><b>ChekBox</b></td>
                        <td><b>Appointment Id</b></td>
                        <td><b>Customer Id</b></td>
                        <td><b>Vehicle Id</b></td>
                        <td><b>Vehicle Name</b></td>
                        <td><b>Service Type</b></td>
                        <td><b>Service Option</b></td>
                        <td><b>Date and Time</b></td>
                        <td><b>Servie Price</b></td>

                    </tr>
                    <tbody>
                        <?php
                                $sql = "SELECT * FROM `service appointment table`";
                                $result = mysqli_query($conn, $sql);
                                
                                if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result))
                                {  
                                echo "<tr>";
                                    echo "<td><input type='checkbox'></td>";
                                    echo "<td>".$row['Appointment_Id'] ."</td>                                                                       
                                    <td>". $row['Customer Id'] ."</td>
                                    <td> ".$row['Vehicles Id'] ."</td>
                                    <td> ".$row['vehicle Name'] ."</td>
                                    <td> ".$row['Service Type'] ."</td>
                                    <td> ".$row['service option'] ."</td>
                                    <td> ".$row['Appointment Date And Time'] ."</td>
                                    <td> ".$row['Service Cost'] ."</td>";
                                    
                                echo "</tr>";
             
                                }
                            }
                            
                        
        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</body>

</html>
