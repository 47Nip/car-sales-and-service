<?php
        include("nav.php");
        $servername = "localhost";
        $username = "root";
        $pass = "";
        $database = "car sales and service";

        $conn = mysqli_connect($servername, $username, $pass, $database);
        //check connection
        if(!$conn){
            die("Sorry,Connection failed: ".mysqli_connect_error());
        }
        ?>

<html>

<head>
    <title>
        View All Service Booking Appotiment
    </title>
</head>
<style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

/* Include your existing nav styles here or link to your CSS file */

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

th,
td {
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
    <div class="main_content">
        <div class="info">
            <div class="content">
                <h3>All Service Booking appointment</h3>
                <table border="2">
                    <tr>
                        <th>Customer id</th>
                        <th>Vehicles id </th>
                        <th>Vehicle Name </th>
                        <th>Service Type </th>
                        <th>Service Option </th>
                        <th>Service Cost </th>
                    </tr>
                    </tbody>
                    <?php
                $sql = "SELECT * FROM `service appointment table`";
                $result = mysqli_query($conn,$sql);
                
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>
                        <td>".$row['Customer Id']."</td>
                        <td>".$row['Vehicles Id']."</td>
                        <td>".$row['vehicle Name']."</td>
                        <td>".$row['Service Type']."</td>
                        <td>".$row['service option']."</td>
                        <td>".$row['Service Cost']."</td>

                        </tr>";
        
                }
       ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
