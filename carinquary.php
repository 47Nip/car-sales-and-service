<?php


$servername = "localhost";
$username = "root";
$pass = "";
$database = "cars";

$conn = mysqli_connect($servername, $username, $pass, $database);
// Check connection
if (!$conn) {
    die("Sorry, connection failed: " . mysqli_connect_error());
}


?>


<html>

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>
        Inquary page
    </title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ddd;
        }

        .content {
            margin-left: 20px;
            padding: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        h3 {
            color:red;
            margin-top: 20px;
        }

        .table-container {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid black;
            text-align: center;
        }

        th {
            background-color: #333;
            color:#f2f2f2;
        }

       

        tr:hover {
            background-color:honeydew;
        }
    </style>

<body>
    <?php include 'nav.php' ?>
    <div class="main_content">
        <div class="info">
            <div class="content">

                <h3>Cars Inquary Dashboard </h3> <br>
                <div class="table-container">
                    <table border="2">
                        <tr>
                            <td><b>ChekBox</b></td>
                            <td><b>INQUARY ID</b></td>
                            <td><b>Customer NAME</b></td>
                            <td><b>Email Id</b></td>
                            <td><b>INQUARY MESSAGE </b></td>


                        </tr>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `cars_inquary`";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td><input type='checkbox'></td>"; // Added single quotes to the input type
                                    echo "<td>" . $row['inquary_id'] . "</td>";
                                    echo "<td>" . $row['Customer Name'] . "</td>";
                                    echo "<td>" . $row['Customer Email Id'] . "</td>";
                                    echo "<td>" . $row['Message'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No records found</td></tr>";
                            }
                            ?>

                        </tbody>

                    </table>
                </div>





            </div>
        </div>
    </div>

</body>
</head>

</html>