<?php include 'nav.php'; 
$servername = "localhost";
$username = "root";
$password = "";
$database = "car sales and service";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry Conection failed.".mysqli_connect_error());
}

?>
<html>
    <head>
        <title>View All Payment</title>

    </head>
    <style>
        /* payment.css */

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

.content {
    margin-left: 240px;
    padding: 20px;
}

h3 {
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: left;
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
        <div class = "content">
            <h3>All Payment Details </h3>
            <table border="2">
                <tr>
                    <th>Order Id</th>
                    <th>Customer Id </th>
                    <th>Payment Method </th>
                    <th>Payment Amount </th>
                    <th>Payment Status </th>
                </tr>
</tbody>
            <?php 
                $sql = "SELECT * FROM `payment table`";
                $result = mysqli_query($conn,$sql);
                
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>
                        <td>".$row['Order Id']."</td>
                        <td>".$row['Customer Id']."</td>
                        <td>".$row['Payment Method']."</td>
                        <td>".$row['Payment_Amount']."</td>
                        <td>".$row['Payment Status']."</td>


                        </tr>";
                }
            ?>
            </table>
        </div>

    </body>
</html>