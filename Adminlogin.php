<?php
$login = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
include 'Databse_con.php';
$username = $_POST["username"];
$password = $_POST["password"];

$exists = false;


//$sql = "SELECT * from users where username='$username' AND password = '$password'";
$sql = "SELECT * from admin_table where username='$username'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);

  if($num == 1){
    while($row = mysqli_fetch_assoc($result))
    {
      if(password_verify($password,$row['password']))
      {
      $login =true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      
      header("Location: admin.php");

      }
      else
{
  $showerror =  "invalid username and password";
}
    }
   
   
  }

else
{
  $showerror =  "invalid username and password";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="adminlogo.css">
</head>
<body>
    
    <?php 
         
      if($login){
         echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> you are logged in
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
        <h1 class="text-center">Login For Admin</h1>
        <div class="photo">
          <header>
              <img src="img/admin1.png" alt = "Adminlogo">
            </header>
        <form action="Adminlogin.php" method="post">
            <div class="col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <br>
            <br>
            <button type="submit" class="btn btn-primary">login</button>
        </form>
    </div>
    </div>

</body>
</html>
