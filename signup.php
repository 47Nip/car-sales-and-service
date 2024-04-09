<?php
$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
include 'dbconnect.php';
$username = $_POST["username"];
$emailid = $_POST["email"];
$password = $_POST["password"];
$cPassword = $_POST["cPassword"];
$dateofbirth = $_POST["date"];
$country = $_POST["country"];
$state = $_POST["state"];
$city = $_POST["city"];
$mobileno = $_POST["phone"];
$securityquestion = $_POST["securityQuestion"];
$answer = $_POST["extraFieldInput"];
//$exists = false;

//check whether same username
$existsql = "SELECT * FROM users where username = '$username' ";
$result = mysqli_query($conn,$existsql);
$numExistsRows = mysqli_num_rows($result);
if($numExistsRows > 0)
{
   // $exists = true;
   $showerror =  " username already take it";
}
else

    //$exists = false;
        if(($password == $cPassword) ){ 
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users ( `username`, `password`,`emailid`, `date_of_birth`,`country`,`State`,`city`,`mobile_no`,`securtyquestion`,`answer`) VALUES ( '$username', '$hash', '$emailid', '$dateofbirth', '$country','$state','$city','$mobileno','$securityquestion','$answer')";
        $result = mysqli_query($conn,$sql);

        if($result){
            $showalert =true;
            
        }
        }
        else
        {
        $showerror =  "password and username not valid ";
        }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <?php 
          
        if($showalert){
         echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> your account is created you can now login
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
          </button>
</div>';
}
?>
    <?php 
      if($showerror){
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> ' . $showerror. '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}
?>
    <div class="container">
        <h1>Sign up to Our Website</h1>
        <div class="photo">
            <img src="img\admin1.png" alt="Adminlogo" height="80px" width="80px">
        </div>
        <form action="signup.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Id"
                    required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                    required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="cPassword" name="cPassword"
                    placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <input type="date" class="form-control" id="date" name="date" placeholder="Date of Birth" onclick="disableFutureDates();">
            </div>
            <div class="form-group">
                <input type="country" class="form-control" id="country" name="country" placeholder="Enter Your Country"
                    required>
            </div>
            <div class="form-group">
                <input type="state" class="form-control" id="state" name="state" placeholder="Enter Your State"
                    required>
            </div>
            <div class="form-group">
                <input type="city" class="form-control" id="city" name="city" placeholder="Enter Your City" required>
            </div>
            <div class="form-group">
                <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number"
                    pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
            </div>
            <div class="form-group">
                <div class="details">

                    <div class="arrow" id="arrow">*</div>
                    <div class="details-content" id="detailsContent" style="display: none;">
                        <!-- Your details content goes here -->
                        <p>This is some security question for your use. In case you forget your password, you can reset it 
                            using this security question.</p>

                    </div>
                </div>
                <select id="securityQuestion" name="securityQuestion" class="form-control" onchange="toggleTextField()">
                    <option value="" disabled selected>Select a security question</option>
                    <option value="mother_maiden">What is your mother's maiden name?</option>
                    <option value="first_pet">What is the name of your first pet?</option>
                    <option value="birth_city">What city were you born in?</option>
                    <option value="favorite_movie">What is your favorite movie?</option>
                    <option value="favorite_teacher">What is the name of your favorite teacher?</option>
                </select>
            </div>
            <div class="form-group" id="extraField" name="extraField" style="display: none;">
                <input type="text" class="form-control" id="extraFieldInput" name="extraFieldInput" placeholder="Enter Your Answer">
            </div>

            <div class="button">
                <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                <div class="sign">
                    <a href="login.php">Already have an account? Login here</a>
                </div>
            </div>
        </form>
    </div>
    <script>
    var arrow = document.getElementById('arrow');
    var detailsContent = document.getElementById('detailsContent');

    arrow.addEventListener('mouseenter', function() {
        detailsContent.style.display = 'block';
        arrow.textContent = '*'; // Change arrow to down arrow
    });

    arrow.addEventListener('mouseleave', function() {
        detailsContent.style.display = 'none';
        arrow.textContent = '*'; // Change arrow to right arrow
    });
    function toggleTextField() {
    var securityQuestionDropdown = document.getElementById('securityQuestion');
    var extraFieldDiv = document.getElementById('extraField');

    if (securityQuestionDropdown.value !== '') {
        extraFieldDiv.style.display = 'block';
    } else {
        extraFieldDiv.style.display = 'none';
    }
}
function disableFutureDates() {
    var today = new Date().toISOString().split('T')[0];
    document.getElementById("date").setAttribute('max', today);
}

    </script>

</body>

</html>
