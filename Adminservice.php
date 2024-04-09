<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Add DataTables library -->
    <script src="//cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

    <title>Service page</title>

    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.content {
    margin: 20px auto;
    width: 90%; /* Adjust width as needed */
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-left: 250px;
}

h3 {
    text-align: center;
}

.tablecontainer {
    margin-top: 20px;
    text-align: center;
}

table {
    width: 100%; /* Occupy full width of container */
    border-collapse: collapse;
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

a {
    color: blue;
}

a:hover {
    color: red;
}

    </style>

</head>

<body>
<?php 
include 'nav.php' ;?>
    <div class="content">
        <h3>All Car Services</h3>
        <div class="tablecontainer">
            <?php 
            // Establishing database connection
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $database = "car sales and service";
            $conn = mysqli_connect($servername, $username, $pass, $database);
            
            // Check connection
            if (!$conn) {
                die("Error: " . mysqli_connect_error());
            }

            // Array of table names
            $tables = ['car_wash','regular_car_service','repair_car','car_sos','car_windshield','car_inspection'];
            foreach ($tables as $table) {
                $sql = "SELECT * FROM $table";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    echo "<h2>$table</h2>"; // Display table name
                    echo "<table class='table' border='2'>
                            <tr>
                                <th>For Record Update , Insert Delete </th>
                                <th>Service_id</th>
                                <th>Service_header</th>
                                <th>Service Image </th>
                                <th>Service Name</th>
                                <th>Service Warranty/Time</th>
                                <th>Service Details</th>
                                <th>Service Price</th>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><a href = 'addnewservice.php'>Insert</a> | <a href = 'updateservice.php'>Update</a> | <a href = 'deleteservice.php'>Delete</a></td>";
                        echo "<td>" .$row['service_id'] ."</td>";
                        echo "<td>" .$row['header'] ."</td>";
                        echo "<td><img src='" . $row['img_url'] . "' alt='Company Logo'></td>";
                        echo "<td>" .$row['service_name'] ."</td>";
                        echo "<td>" .$row['warranty'] ."</td>";
                        echo "<td>" .$row['Description'] ."</td>";
                        echo "<td>" .$row['price'] ."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
            
            // Close connection
            mysqli_close($conn);
            ?>
        </div>
    </div>  

</body>

</html>
