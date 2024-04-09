<?php 
include 'nav.php';
$servername = "localhost";
$username = "root";
$pass = "";
$database = "car sales and service"; 

$conn = mysqli_connect($servername, $username, $pass, $database);

if (!$conn) {
    die("Error: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$emp_id = $_POST['emp_id'];
$id = $_POST['id_proof'];
$idnumber = $_POST['id_proof_number'];
$c_name = $_POST['customer_name'];
$cnumber = $_POST['number'];
$car_company_name = $_POST['company_name']; 
$car_model = $_POST['car_model'];
$payment_method = $_POST['paymentmethod']; 
$dowanpayment = $_POST['dowanpayment'];
$price = $_POST['price'];
$delivery_date = $_POST['delivery_date'];


$sql = "INSERT INTO `order table` (`Sales Emp Id`,`Customer_idproof`, `idproof_number`, `Customer_name`, `Customer_number`, `Car_company_name`, `Car_model`, `payment_method`, `dowanpayment`, `price`, `delivery_date`) VALUES ('$emp_id','$id', '$idnumber', '$c_name', '$cnumber', '$car_company_name', '$car_model', '$payment_method', '$dowanpayment', '$price', '$delivery_date')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Data added successfully";
} else {
    echo "Error: " . mysqli_error($conn); // Corrected function name
}
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="order.css">
    <title>Add Order</title>
</head>

<body>
    <div class="order">
        <h2>Add New Order</h2>
        <br><br>
        <form action="order.php" method="POST">
        <label for="emp_id">Employee_id:</label><br>
            <input type="text" id="emp_id" name="emp_id"><br><br>
            <label for="idproof">Id Proof:</label><br>
            <select id="id_proof" name="id_proof" onchange="showIdProofTextBox()">
                <option value="none">Select ID Proof</option>
                <option value="aadhar">Aadhar Card</option>
                <option value="pan">PAN Card</option>
            </select><br><br>
            <div id="id_proof_textbox" style="display: none;">
                <label for="id_proof_number">ID Proof Number:</label><br>
                <input type="text" id="id_proof_number" name="id_proof_number"><br><br>
            </div>
            <label for="customer_name">Customer Name:</label><br>
            <input type="text" id="customer_name" name="customer_name"><br><br>
            <label for="customer_number">Customer Mobile Number:</label><br>
            <input type="text" id="number" name="number"><br><br>
            <label for="company name">Car Company Name:</label><br>
            <input type="text" id="company_name" name="company_name"><br><br>
            <label for="car_model">Car Model:</label><br>
            <input type="text" id="car_model" name="car_model"><br><br>
            <label for="payment method">Payment Method</label><br>
            <input type="text" id="paymentmethod" name="paymentmethod"><br><br>
            <label for="dowanpayment">Dowan Payment(Advance):</label><br>
            <input type="text" id="dowanpayment" name="dowanpayment"><br><br>
            <label for="price">Price:</label><br>
            <input type="text" id="price" name="price"><br><br>
            <label for="delivery_date">Delivery Date:</label><br>
            <input type="date" id="delivery_date" name="delivery_date"  min="<?php echo date('Y-m-d'); ?>"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <script src = "order.js"> </script>
</body>

</html>
