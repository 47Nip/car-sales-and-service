<?php
$selectedService = '';
session_start();
$showalert = false;

$showerror = false;
if (!empty($_SESSION['selectedService']) && !empty($_SESSION['selectedOption']) && !empty($_SESSION['selectprice']) && !empty($_SESSION['customerid'])) {
    $selectedService = $_SESSION['selectedService'];
    $selectedOption = $_SESSION['selectedOption'];
    $selectprice = $_SESSION['selectprice'];
    $customerid = $_SESSION['customerid'];
} else {
    $showerror =true;
    
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "car sales and service"; // Corrected database name

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input
    $paymentmethod = !empty($_POST['paymentMethod']) ? $_POST['paymentMethod'] : null;
    if (!$selectedService) {
        $showerror = true;
    } 
    else{

    $sql = "INSERT INTO `payment table` (`Customer Id`, `Payment Method`, `Payment_Amount`) VALUES ('$customerid', '$paymentmethod', '$selectprice')";

    $result = mysqli_query($conn,$sql);

        if($result){
            $showalert =true;
            
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }   

    }
}
mysqli_close($conn); // Close the database connection
session_abort();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Payment Page</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style> 
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        

        label {
            margin-bottom: 8px;
        }

        input,
        select {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
        #cardDetails{
            display: none;
        }
        #upiDetails{
            display: none;
        }

        
    </style>
</head>

<body>
<?php 
            include('nav.php');
            echo "<br><br><br><br><br>";
          if($showalert){
           echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> your Appotiment is Now Book 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
            </button>
  </div>';
  }
         if($showerror){
            echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> You Have not selected any Service ,Please select service..
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            </div>';
}
  ?>
   
     <?php if ($selectedService): ?>
    <form action="payment.php" method="post" onsubmit="return validateForm()">
        <div class="container">
            <h1>Payment Details</h1>
            <div class="payment-method">
                <input type="radio" id="upiPayment" name="paymentMethod" value="upi" onclick="showUpiDetails()">
                <label for="upiPayment">UPI</label>

                <input type="radio" id="cardPayment" name="paymentMethod" value="card" onclick="showCardDetails()">
                <label for="cardPayment">Card</label>
            </div>

            <!-- Card Payment Details -->
            <div id="cardDetails" class="card-payment">
            <label for="cardNumber">Card Number:</label><br>
                <input type="text" id="cardNumber" name="cardNumber" placeholder="Enter card number" ><br>

                <label for="expiryDate">Expiry Date:</label><br>
                <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YYYY" ><br>

                <label for="cvv">CVV:</label><br>
                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" ><br>

                <label for="cardType">Card Type:</label><br>
                <select id="cardType" name="cardType" required>
                    <option value="visa">Visa</option>
                    <option value="mastercard">MasterCard</option>
                    <option value="amex">American Express</option>
                </select>
            </div>

            <!-- UPI Payment Details -->
            <div id="upiDetails" class="upi-payment">
                <label for="upiId">UPI ID:</label>
                <input type="text" id="upiId" name="upiId" placeholder="Enter UPI ID" >
            </div>
            <p><b>Your Selected Service: <?php echo $selectedService; ?><br>
                    Service Option: <?php echo $selectedOption; ?><br>
                    Your Service Price: <?php echo $selectprice; ?><br>
                </b></p>

            <button type="submit" class="btn">Make Payment</button>
        </div>
         <?php endif; ?>
    </form>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to payment method radio buttons
        var upiPayment = document.getElementById('upiPayment');
        var cardPayment = document.getElementById('cardPayment');

        // Add event listeners to radio buttons to handle click event
        upiPayment.addEventListener('click', showUpiDetails);
        cardPayment.addEventListener('click', showCardDetails);
    });

    function showCardDetails() {
        document.getElementById('cardDetails').style.display = 'block';
        document.getElementById('upiDetails').style.display = 'none';
    }

    function showUpiDetails() {
        document.getElementById('cardDetails').style.display = 'none';
        document.getElementById('upiDetails').style.display = 'block';
    }

    function validateForm() {
        var paymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
        var cardNumber = document.getElementById('cardNumber');
        var expiryDate = document.getElementById('expiryDate');
        var cvv = document.getElementById('cvv');
        var cardType = document.getElementById('cardType');
        var upiId = document.getElementById('upiId');

        // Check if payment method is selected
        if (!paymentMethod) {
            alert('Please select a payment method.');
            return false;
        }

        // Additional validation for card details if card payment selected
        if (paymentMethod.value === 'card') {
            // Check if card number, expiry date, cvv, and card type are filled
            if (!cardNumber.value || !expiryDate.value || !cvv.value || !cardType.value) {
                alert('Please fill in all card details.');
                return false;
            }
        }

        // Additional validation for UPI details if UPI payment selected
        if (paymentMethod.value === 'upi') {
            // Check if UPI ID is filled
            if (!upiId.value) {
                alert('Please fill in the UPI ID.');
                return false;
            }
        }

        return true; // Form is valid, proceed with submission
    }
</script>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>