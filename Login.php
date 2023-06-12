<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Login Form</title>
            <?php include'Links.php' ?>
            <?php include'DBconnect.php' ?>
            <link rel="stylesheet" href="StyleLogin.css">
      </head>
<?php
if(isset($_POST['submit'])){
    $email = $_POST['nemail'];
    $password = $_POST['npassword'];

    $email_search="select * from signupdb where email = '$email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $pass = mysqli_fetch_assoc($query);

        // $db_pass = $pass['Password'];

        // $pass_decode = password_verify($password,$db_pass);
        if (md5($password) === $pass["Password"]) {
        // if($pass_decode){
            ?>
            <script>
                alert("Successful")
            </script>
            <?php
             header("Location: Home.php");
        }
        else{
            ?>
    <script>
        alert("invalid password")
    </script>
    <?php
        }
      }
        else{
            ?>
            <script>
                alert("Invalid Email")
            </script>
            <?php
        }
    }

?>
      <body>
     
       <div class="form_bg text-center">
       
    <div class="container">
    
    <div class="row">
    <div class="col-12 col-md-12 col-lg-6 box2 ">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
      <div class="backicon d-flex">
      <a href="Main.php" data-toggle="tooltip" title="Exit"><i class="fa-solid fa-right-to-bracket fa-rotate-180"></i></a> 
    <h3>User Login</h3>
    </div>
    <div class="logo">
      <img src="images\Logo-removebg-preview.png" width="70px" height="90px"><br>
    </div>
    <br>

    <div class="form-group">
          <i class="fa-solid fa-envelope icon"></i>
        <input class="form-control" type="email" placeholder="Email"  name="nemail" required>
    </div>
    <div class="form-group">
       
        <i class="fa-solid fa-key icon"></i>
        <input class="form-control" type="password" placeholder="Password" name="npassword" required autocomplete="off">
    </div>   
    <div class="form-group">
          <input class=" btn" type="submit" value="Submit" name="submit">
    </div>
    <div class="form-group d-flex">
          <h6>Don't have an account?</h6>
          <a href="Signup1.php">SignUp</a><br>
          
    </div>  
    <div >
    <button class="footbtn"> <a href="FogotPass.php"> Forgot Password?</a></button>&nbsp;&nbsp;
    <button class="footbtn"> <a href="Changepass.php"> Change Password</a></button>
    </div>
    </form>
</div>
</div>
</div>
  </div>
</body>
</html>

