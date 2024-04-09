<?php
$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
include 'Databse_con.php';
$username = $_POST["username"];
$password = $_POST["password"];
$cPassword = $_POST["cPassword"];
//$exists = false;

//check whether same username
$existsql = "SELECT * from admin_table where username='$username'";
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
        $sql = "INSERT INTO `admin_table` ( `username`, `password`) VALUES ( '$username', '$hash')";
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

    <link rel="stylesheet" href="adminlogo.css">
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
    <div class="container my-4">
        <h1 class="text-center">Sign up to our website</h1>
        <form action="Adminsignin.php" method="post">
        <div class="photo">
          <header>
              <img src="img\admin1.png" alt = "Adminlogo">
            </header>
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" maxlength="15" class="form-control" id="username" name="username">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" maxlength="30" class="form-control" id="password" name="password">
            </div>
            <div class="col-md-6">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" maxlength="30" class="form-control" id="cPassword" name="cPassword">
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">sign up</button>
            <p> You Can Login using This Link  <a href = "login.php">LOGIN </a> </p>
        </form>
    </div>
</div>

</body>
</html>
