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
        $sql = "INSERT INTO users ( `username`, `password`,`emailid`, `date_of_birth`,`country`,`State`,`city`,`mobile_no`) VALUES ( '$username', '$hash', '$emailid', '$dateofbirth', '$country','$state','$city','$mobileno')";
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
<style>

body {
    background: linear-gradient(to right, #e65a5a, #dfd155, #2b9155);
    color: red;
    font-family: 'Arial', sans-serif;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
   margin-top: 50px;
   padding-top: 50px;
}

.container {
    
    padding-top: 50px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
    padding: 30px;
    width: 400px;
    
}

h1 {
    text-align: center;
    color: #007bff;
}

.photo {
    text-align: center;
    margin-bottom: 20px;
    margin-right: 20px;
}

form {
    text-align: center;
}

button {
    background-color: red;
    color:red;
}

.sign {
    text-align: center;
    margin-top: 20px;
}

img {
    border-radius: 50%;
}
</style>

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
    <h1>Create A New User</h1>
    
    <form action="usersignup.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email Id" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" id="cPassword" name="cPassword" placeholder="Confirm Password" required>
        </div>
        <div class="form-group">
            <input type="date" class="form-control" id="date" name="date" placeholder="Date of Birth" required>
        </div>
        <div class="form-group">
            <input type="country" class="form-control" id="country" name="country" placeholder="Enter Your Country" required>
        </div>
        <div class="form-group">
            <input type="state" class="form-control" id="state" name="state" placeholder="Enter Your State" required>
        </div>
        <div class="form-group">
            <input type="city" class="form-control" id="city" name="city" placeholder="Enter Your City" required>
        </div>
        <div class="form-group">
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number" required>
        </div>
        <div class="button">
            <button type="submit" class="btn btn-primary btn-block">Create A User</button>
        
        </div>
        <br><p>For Go To Admin Portal </p>
        <a href = "userlist.php">Admin Portal </a>
    </form>
</div>

</body>
</html>
