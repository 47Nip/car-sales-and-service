<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true || !isset($_SESSION['username'])) {
    // Redirect to login page with an error message
    header("location: login.php?error=You must log in to access this page.");
    exit;
}
?>
<?php

$servicePrices = array(
    "360° Deep Cleaning" => 2499,
    "Car Interior Spa" => 1499,
    "premium top Wash" => 199,
    "Car Rubbing & Polishing" => 2199,
    "Basic Service" => 3599,
    "Standard Service" => 4699,
    "Comprehensive Service" => 5999,
    "Front Bumper Paint" => 2500,
    "Bonnet Paint" => 2500,
    "Rear Bumper Paint" => 2450,
    "Boot Paint" => 2450,
    "Full Body Dent Paint" => 26000,
    "Battery Jumpstart" => 700,
    "Car Fluid leakage" => 700,
    "Wheel-Lift Tow(20 KMs)" => 950,
    "Car Self Starter issue" => 800,
    "Insure Accident" => 599,
    "Brake Failure" => 1200,
    "Critical Dashboard Light" => 899,
    "Front Windshield Replacement" => 6825,
    "Rear Windshield Replacement" => 4000,
    "Front Headlight" => 4600,
    "Rear Taillight" => 2600,
    "Second-hand Car Inspection" => 1000,
    "Road Trip Inspection" => 1500,
    "Engine Scanning" => 899
);

function displayServicePrice($selectedService, $servicePrices) {
    
    return isset($servicePrices[$selectedService]) ? $servicePrices[$selectedService] : "Service not found";
}

// Function to check and display service price
function checkAndDisplayServicePrice($selectedService, $servicePrices) {
    
    return isset($_POST[$selectedService]) ? displayServicePrice($_POST[$selectedService], $servicePrices) : "Select a service";
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "car sales and service";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customerid = $_POST['customerid'];
    $vehicleid = $_POST['vehicleid'];
    $vehiclename = $_POST['vehiclename'];
    $selectservice = $_POST['firstDropdowan'];
    $selectOption = "";
    $selectprice = "Select a service";

    if ($selectservice) {
    $_SESSION['customerid'] =  $customerid;
    $_SESSION['selectedService'] = $selectservice;
   
    $sql = "";


    switch ($selectservice) {
        case "carWash":
            $selectOption = $_POST['secondDropdown'];
            $selectprice = checkAndDisplayServicePrice('secondDropdown', $servicePrices);
           
            break;
        case "regularMaintenance":
            $selectOption = $_POST['thirdDropdown'];
            $selectprice = checkAndDisplayServicePrice('thirdDropdown', $servicePrices);
            
            break;
        case "repairCar":
            $selectOption = $_POST['fourDropdown'];
            $selectprice = checkAndDisplayServicePrice('fourDropdown', $servicePrices);
            break;
        case "SOS Service":
            $selectOption = $_POST['fiveDropdown'];
            $selectprice = checkAndDisplayServicePrice('fiveDropdown', $servicePrices);
            break;
        case "Windshields":
            $selectOption = $_POST['sixDropdown'];
            $selectprice = checkAndDisplayServicePrice('sixDropdown', $servicePrices);
            break;
        case "CarInspection":
            $selectOption = $_POST['sevenDropdown'];
            $selectprice = checkAndDisplayServicePrice('sevenDropdown', $servicePrices);
            break;
    }
    $_SESSION['selectedOption'] = $selectOption;
    $_SESSION['selectprice'] = $selectprice;

    $sql = "INSERT INTO `service appointment table` (`Customer Id`, `Vehicles Id`, `vehicle Name`, `Service Type`, `service option`,`Service Cost`) 
            VALUES ('$customerid', '$vehicleid', '$vehiclename', '$selectservice', '$selectOption','$selectprice')";

    if (mysqli_query($conn, $sql)) {
        // Record inserted successfully
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Car Service Booking</title>
    <link rel="stylesheet" href="home (2).css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
    body {
        background-image: url('img/hero-bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0;
        padding: 0;
    }

    .table-con {
        text-align: center;
    }

    table {
        margin: 0 auto;
    }

    tr,
    th {
        font-size: 26px;
        padding-left: 20px;
        padding-right: 20px;
        color: lightskyblue;
    }

    th input,
    select {
        margin-left: 40px;
        margin-right: 20px;
    }

    h3 {
        font-size: 25px;
        color: red;
        margin-top: 20px;
    }

    a.btn {
        display: inline-block;
        padding: 10px 20px;
        font-size: 20px;
        text-align: center;
        text-decoration: none;
        background-color: #007BFF;
        color: #fff;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    a.btn:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {

        th input,
        select {
            margin-left: 0;
            margin-right: 0;
        }

        a.btn {
            margin-left: 0;
        }
    }

    /* Additional Styles for Car Service Booking Page */

    /* Adjusted margin for the anchor tag */
    a {
        margin-left: 43%;
    }

    /* Improved styling for dropdown containers */
    #secondDropdownContainer,
    #thirdDropdownContainer,
    #fourDropdownContainer,
    #fiveDropdownContainer,
    #sixDropdownContainer,
    #sevenDropdownContainer {
        display: none;
        margin-top: 10px;
    }

    /* Added styling for dropdown options */
    select {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
        width: 100%;
    }

    /* Added styling for form input fields */
    input[type="text"],
    select {
        width: 80%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    /* Improved styling for table headers */
    th {
        padding: 15px;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {

        #secondDropdownContainer,
        #thirdDropdownContainer,
        #fourDropdownContainer,
        #fiveDropdownContainer,
        #sixDropdownContainer,
        #sevenDropdownContainer {
            margin-top: 5px;
        }
    }

    </style>
</head>

<body>
    <br><br>
    <form id="serviceForm" action="service_book.php" method="post">

        <div class="table-con">
            <table border="2">
                <h3>Book your Car service Appointment</h3><br>
                <tr>
                    <th>Customer Id </th>
                    <th><input type="text" id="customerid" name="customerid" oninput="validateInput(event)"></th>
                </tr>
                <tr>
                    <th>Vehicle Id </th>
                    <th><input type="text" id="vehicleid" name="vehicleid" required></th>
                </tr>
                <tr>
                    <th>Vehicle Name </th>
                    <th><input type="text" id="vehiclename" name="vehiclename" onclick="validateNumberPlate(event)">
                    </th>
                </tr>
                <tr>
                    <th>Select Service </th>
                    <th>
                        <select id="firstDropdowan" name="firstDropdowan" onchange="showDropdowns()">
                            <option value="select...">select...</option>
                            <option value="carWash">Car Wash</option>
                            <option value="regularMaintenance">Regular Maintenance</option>
                            <option value="repairCar">Repair Car</option>
                            <option value="SOS Service">SOS Service</option>
                            <option value="Windshields">Windshields</option>
                            <option value="CarInspection">Car Inspection</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>Various service options </th>
                    <th>
                        <div id="secondDropdownContainer" style="display:none;">
                            <select id="secondDropdown" name="secondDropdown" onchange="event.preventDefault(); this.form.submit()">
                                <option value="select">select..</option>
                                <option value="360° Deep Cleaning">360° Deep Cleaning</option>
                                <option value="Car Interior Spa">Car Interior Spa</option>
                                <option value="premium top Wash">premium top Wash</option>
                                <option value="Car Rubbing & Polishing">Car Rubbing & Polishing </option>
                            </select>
                        </div>
                        <div id="thirdDropdownContainer" style="display:none;">
                            <select id="thirdDropdown" name="thirdDropdown" onchange="this.form.submit()">
                                <option value="select">select..</option>
                                <option value="Basic Service">Basic Service</option>
                                <option value="Standard Service">Standard Service</option>
                                <option value="Comprehensive Service">Comprehensive Service</option>
                            </select>
                        </div>
                        <div id="fourDropdownContainer" style="display:none;">
                            <select id="fourDropdown" name="fourDropdown" onchange="this.form.submit()">
                                <option value="select">select..</option>
                                <option value="Front Bumper Paint">Front Bumper Paint</option>
                                <option value="Bonnet Paint">Bonnet Paint</option>
                                <option value="Rear Bumper Paint">Rear Bumper Paint</option>
                                <option value="Boot Paint">Boot Paint</option>
                                <option value="Full Body Dent Paint">Full Body Dent Paint</option>
                            </select>
                        </div>
                        <div id="fiveDropdownContainer" style="display:none;">
                            <select id="fiveDropdown" name="fiveDropdown" onchange="this.form.submit()">
                                <option value="select">select..</option>
                                <option value="Battery Jumpstart">Battery Jumpstart</option>
                                <option value="Car Fluid leakage">Car Fluid leakage</option>
                                <option value="Wheel-Lift Tow(20 KMs)">Wheel-Lift Tow(20 KMs)</option>
                                <option value="Car Self Starter issue">Car Self Starter issue</option>
                                <option value="Insure Accident">Insure Accident</option>
                                <option value="Brake Failure">Brake Failure</option>
                                <option value="Critical Dashboard Light">Critical Dashboard Light</option>
                            </select>
                        </div>
                        <div id="sixDropdownContainer" style="display:none;">
                            <select id="sixDropdown" name="sixDropdown" onchange="this.form.submit()">
                                <option value="select">select..</option>
                                <option value="Front Windshield Replacement">Front Windshield Replacement</option>
                                <option value="Rear Windshield Replacement">Rear Windshield Replacement</option>
                                <option value="Front Headlight">Front Headlight</option>
                                <option value="Rear Taillight">Rear Taillight</option>
                            </select>
                        </div>
                        <div id="sevenDropdownContainer" style="display:none;">
                            <select id="sevenDropdown" name="sevenDropdown" onchange="this.form.submit()">
                                <option value="select">select..</option>
                                <option value="Second-hand Car Inspection">Second-hand Car Inspection</option>
                                <option value="Road Trip Inspection">Road Trip Inspection</option>
                                <option value="Engine Scanning">Engine Scanning</option>
                            </select>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th>Service Price </th>
                    <th>
                        <?php
                        // Check if a service is selected and display the price
                        
                        
                        echo isset($selectprice) ? $selectprice : "Select a service";
                        ?>
                    </th>
                </tr>
            </table>
        </div>
        <br><br>
        <a href="payment.php" class="btn">Book Appointment Now</a>

    </form>
    <script>
    function validateInput(event) {
        // Get the input value
        let input = event.target.value;

        // Check if the input is numeric
        if (!(/^\d*$/).test(input)) {
            // If input is not numeric, prevent default behavior (typing) and clear the input
            event.preventDefault();
            event.target.value = '';
            alert("Please enter only numeric values.");
        }
    }

    function validateNumberPlate(event) {
        // Get the input value
        let input = event.target.value;

        // Define the regular expression pattern
        let pattern = /^[A-Za-z]{2}\d{2}[A-Za-z]{2}\d{4}$/;

        // Check if the input matches the pattern
        if (!pattern.test(input)) {
            // If input does not match the pattern, prevent default behavior (typing)
            event.preventDefault();
            alert("Please enter a valid Indian vehicle number Id (e.g., GJ01WP1440).");
        }
    }

    function stopFormRefresh(event) {
        event.preventDefault(); // Stop the default form submission
        // Add your custom functionality here
        // For example, you can perform AJAX requests or update the page content dynamically
    }

    function showDropdowns() {
        var firstDropdown = document.getElementById("firstDropdowan");
        var secondDropdownContainer = document.getElementById("secondDropdownContainer");
        var thirdDropdownContainer = document.getElementById("thirdDropdownContainer");
        var fourDropdownContainer = document.getElementById("fourDropdownContainer");
        var fiveDropdownContainer = document.getElementById("fiveDropdownContainer");
        var sixDropdownContainer = document.getElementById("sixDropdownContainer");
        var sevenDropdownContainer = document.getElementById("sevenDropdownContainer");

        if (firstDropdown.value == "carWash") {

            secondDropdownContainer.style.display = "block";
            thirdDropdownContainer.style.display = "none";
            fourDropdownContainer.style.display = "none";
            fiveDropdownContainer.style.display = "none";
            sixDropdownContainer.style.display = "none";
            sevenDropdownContainer.style.display = "none";
        } else if (firstDropdown.value == "regularMaintenance") {

            secondDropdownContainer.style.display = "none";
            thirdDropdownContainer.style.display = "block";
            fourDropdownContainer.style.display = "none";
            fiveDropdownContainer.style.display = "none";
            sixDropdownContainer.style.display = "none";
            sevenDropdownContainer.style.display = "none";
        } else if (firstDropdown.value == "repairCar") {

            secondDropdownContainer.style.display = "none";
            thirdDropdownContainer.style.display = "none";
            fourDropdownContainer.style.display = "block";
            fiveDropdownContainer.style.display = "none";
            sixDropdownContainer.style.display = "none";
            sevenDropdownContainer.style.display = "none";
        } else if (firstDropdown.value == "SOS Service") {

            secondDropdownContainer.style.display = "none";
            thirdDropdownContainer.style.display = "none";
            fourDropdownContainer.style.display = "none";
            fiveDropdownContainer.style.display = "block";
            sixDropdownContainer.style.display = "none";
            sevenDropdownContainer.style.display = "none";
        } else if (firstDropdown.value == "Windshields") {

            secondDropdownContainer.style.display = "none";
            thirdDropdownContainer.style.display = "none";
            fourDropdownContainer.style.display = "none";
            fiveDropdownContainer.style.display = "none";
            sixDropdownContainer.style.display = "block";
            sevenDropdownContainer.style.display = "none";
        } else if (firstDropdown.value == "CarInspection") {

            secondDropdownContainer.style.display = "none";
            thirdDropdownContainer.style.display = "none";
            fourDropdownContainer.style.display = "none";
            fiveDropdownContainer.style.display = "none";
            sixDropdownContainer.style.display = "none";
            sevenDropdownContainer.style.display = "block";
        } else {

            secondDropdownContainer.style.display = "none";
            thirdDropdownContainer.style.display = "none";
            fourDropdownContainer.style.display = "none";
            fiveDropdownContainer.style.display = "none";
            sixDropdownContainer.style.display = "none";
            sevenDropdownContainer.style.display = "none";
        }
        return false;
    }
    </script>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</html>
