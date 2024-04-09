<?php 
$servername = "localhost";
$username = "root";
$pass = "";
$database = "cars";

$conn = mysqli_connect($servername,$username,$pass,$database);

if(!$conn){
    die("error" .mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Brand of Cars</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <?php 
     $sql = "SELECT * FROM car_company";
     $result = $conn->query($sql);
$cars = 'admincars.php';
     if ($result->num_rows > 0) {
        echo "<h2>Car Companies</h2>"; // Display table name
        echo "<table>
                <tr>
                    <th>Actions</th>
                    <th>Car Company ID</th>
                    <th>Car Company Name</th>
                    <th>Company Logo</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            
            echo "<td><a href='updatecar.php'>Update</a> | <a href='deletecar.php'>Delete</a> | <a href='addcar.php'>Insert</a></td> ";
            echo "<td>" .$row['car_company_id'] ."</td>";
            echo "<td>" .$row['comapny_name'] ."</td>";
            echo "<td><a href='" . $cars . "'><img src='" . $row['logo_img_url'] . "' alt='Company Logo'></a></td>";

           
            echo "</tr>";
        }
        echo "</table>";
     }

    ?>
</body>
</html>
