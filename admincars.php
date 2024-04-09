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
        <h3>All Cars</h3>
        <div class="tablecontainer">
            <?php 
            // Establishing database connection
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $database = "cars";
            $conn = mysqli_connect($servername, $username, $pass, $database);
            
            // Check connection
            if (!$conn) {
                die("Error: " . mysqli_connect_error());
            }

            // Array of table names
            $tables = ['audi','bmw','honda','hyundai','jeep','kia','mahindra','maruti_suzuki','maserati','mercedes-benz','mini','nissan','renault','skoda','tata','toyota'];
            foreach ($tables as $table) {
                $sql = "SELECT * FROM `$table`";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    echo "<h2>$table</h2>"; // Display table name
                    echo "<table class='table' border='2'>
                            <tr>
                                
                            <th>Delete , Update , Insert Car </th>
                            <th>Car Id </th>
                                <th>Car Name</th>
                                <th>Car Image </th>
                                
                                
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><a href = 'carsadd.php'>Insert</a> | <a href = 'carupdate.php'>Update</a> | <a href = 'cardelete.php'>Delete</a></td>";
                        echo "<td>" .$row['id'] . "</td>";
                        echo "<td>" .$row['name'] ."</td>";
                        echo "<td><img src='../user/$table/images/" . $row['img_url'] . "' alt='Company Logo'></td>";

                        
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
