<?php 

$servername = "localhost";
$username = "root";
$pass = "";
$database = "users2810";

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
        Service page
    </title>
    <style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
           background-color: #ddd;

        }

        .content {
            /* margin-left: 40px; */
            padding: 40px;
            align-items: center;
            padding-left: 150px;
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
            color:crimson;
            margin-top: 20px;
        }

        .table-container {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            border-radius: 10px; 
            overflow: hidden;
            background-color:transparent; /* Set table background color */
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: transparent;
            color: black;
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

        tr:hover {
            background-color:ghostwhite;
        }

    </style>

<body>
    <?php include 'nav.php'?>
    <div class="main_content">
        <div class="info">
            <div class="content">
               
                <h3>ALL USER DATA </h3> <br>
                <div class="table-container">
                    <table border="2">
                        <tr>
                            <td><b>USERNAME</b></td>
                            
                            <td><b>Email Id</b></td>
                            <td><b>Date Of Birth</b></td>
                            <td><b>Country</b></td>
                            <td><b>State</b></td>
                            <td><b>City</b></td>
                            <td><b>Mobile No</b></td>

                        </tr>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM `users`";
                                $result = mysqli_query($conn, $sql);

                                while($row = mysqli_fetch_assoc($result))
                                {  
                                echo "<tr>
                                    
                                    <td>".$row['username'] ."</td>                                                                        
                                    
                                    <td> ".$row['emailid'] ."</td>
                                    <td> ".$row['date_of_birth'] ."</td>
                                    <td> ".$row['country'] ."</td>
                                    <td> ".$row['State'] ."</td>
                                    <td> ".$row['city'] ."</td>
                                    <td> ".$row['mobile_no'] ."</td>
                                    
                                </tr>";
             
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
