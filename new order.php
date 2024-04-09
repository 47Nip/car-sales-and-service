    <?php 
            include 'nav.php';
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "car sales and service";

            $conn = mysqli_connect($servername,$username,$password,$database);

            if(!$conn){
                die("error" .mysqli_connect_error());
            }

    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <script src='main.js'></script>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    /* background-color: #f2f2f2; Set background color */
    margin: 0;
    padding: 0;
    background-color: #ddd;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-size: 100% 100%;
    
}

.main_content {
    max-width: 1200px;
    margin: 20px auto;
    background-color: transparent;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.info {
    margin: 20px 0;
}

.content {
    padding: 20px;
}

h3 {
    text-align: center;
    color: black;
    font-size: 40px;
}

.table-container {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: red;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    color: black;
    width: 100%;
}


tr:hover {
    background-color:cornsilk; /* Hover row background color */
}

/* Checkbox style */
input[type="checkbox"] {
    transform: scale(1.5);
}

/* Optional: Increase font size for better readability */
td {
    font-size: 14px;
}

    </style>
<body>
     <div class="main_content">
        <div class="info">
            <div class="content">

                <h3>New Order of Car </h3> <br>
                <div class="table-container">
                    <table border="2">
                        <tr>
                            <td><b>Chekbox</b></td>
                            <td><b>Order Id</b></td>
                            <td><b>Sales Emp Id</b></td>
                            <td><b>Customer_id proof Name</b></td>
                            <td><b>id proof Number</b></td>
                            <td><b>Customer Name</b></td>
                            <td><b>Customer Number </b></td>
                            <td><b>Car Company Name </b></td>
                            <td><b>Car Model </b></td>
                            <td><b>Payment  Method </b></td>
                            <td><b>Dowan Payment (Advance Payment) </b></td>
                            <td><b>Car Price </b></td>
                            <td><b>Car Delivery Date </b></td>

                        </tr>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `order table`";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td><input type='checkbox'></td>"; // Added single quotes to the input type
                                    echo "<td>" . $row['Order Id'] . "</td>";
                                    echo "<td>" . $row['Sales Emp Id'] . "</td>";
                                    echo "<td>" . $row['Customer_idproof'] . "</td>"; // Changed 'Phone Number' to 'Phone_Number'
                                    echo "<td>" . $row['idproof_number'] . "</td>";
                                    echo "<td>" . $row['Customer_name'] . "</td>";
                                    echo "<td>" . $row['Customer_number'] . "</td>";
                                    echo "<td>" . $row['Car_company_name'] . "</td>";
                                    echo "<td>" . $row['Car_model'] . "</td>";
                                    echo "<td>" . $row['payment_method'] . "</td>";
                                    echo "<td>" . $row['dowanpayment'] . "</td>";
                                    echo "<td>" . $row['price'] . "</td>";
                                    echo "<td>" . $row['delivery_date'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>No records found</td></tr>";
                            }
                            ?>

                        </tbody>

                    </table>
                </div>





            </div>
        </div>
    </div>

</body>
</html>