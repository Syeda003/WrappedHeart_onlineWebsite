<?php
session_start();
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>SignUp Form</title>
            <?php include'Links.php' ?>
            <?php include'DBconnect.php' ?>
            <link rel="stylesheet" href="css/StyleSignup.css">
      </head>

     <body class="bb">
      <?php
      
      if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn,$_POST['nusername']);
        $email = mysqli_real_escape_string($conn,$_POST['nemail']);
        $mobile = mysqli_real_escape_string($conn,$_POST['nphone']);
        $password = mysqli_real_escape_string($conn,$_POST['npassword']);
        $cpassword = mysqli_real_escape_string($conn,$_POST['nCpassword']);
        
        $pass = md5($password);
        $cpass = md5($cpassword);
        // $pass = password_hash($password,PASSWORD_BCRYPT);
        // $cpass = password_hash($cpassword,PASSWORD_BCRYPT);

        $emailquery = " select * from signupdb where email = '$email'";
        $query = mysqli_query($conn,$emailquery);
        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
        ?>
         <script>
                    alert("Email ID already exits")
         </script>
        
        <!-- <script>
           function popup(){
            swal("Error!", "EmailID already exists!", "error");
           }
        </script> -->
        <?php
        }else {
        if ($password === $cpassword){
            $insertquery = "insert into signupdb(UName, Email, Phone, Password, CPassword) values('$username','$email','$mobile','$pass','$cpass')";
            $iquery = mysqli_query($conn,$insertquery);
            
            if($iquery)
            {
                ?>
                <script>
                    alert("inserted Successful")
                </script>
                <?php
                header("Location: Login.php");
            }
            else {
                ?>
                <script>
                    alert(" Failed")
                </script>
                <?php
            }

          }
          else{
            ?>
             <script>
                    alert("Password not matching")
                </script>
            <!-- <script>
               function popup(){
                swal("Gpassword", "You clicked the button!", "success");
               }
            </script>  -->
            <?php
          }
         
        }
        
      }
     
      ?>


<div class="container">
  
<div class="row">
  <div class="col-12 col-md-12 col-lg-6 box2 d-flex">
    <div class="leftpart">
    <div class="backicon d-flex">
      <a href="Main.php" data-toggle="tooltip" title="Exit"><i class="fa-solid fa-right-to-bracket fa-rotate-180"></i></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <h1 class="text-center">Sign Up</h1>
    </div>
  

  <img class="card-img-right gifimg " src="images\ekruut-sign-up.gif" width="400px" height="400px"/>
    </div>
  </div>

  
  <div class="col-12 col-md-12 col-lg-6 box2 d-flex">
  <div class="cardform"  >
        
        <article class="card-body " style="max-width:500px;">
   
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
      <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="nusername" required>
    </div>
     
  <div class="input-container">
  <i class="fa-solid fa-envelope icon"></i>
        <input class="input-field" type="email" placeholder="Email"  name="nemail" required>
      </div>
      
      <div class="input-container">
      <i class="fa-solid fa-phone icon"></i>
          <input class="input-field" type="tel" placeholder="Phone No" name="nphone" pattern="[6-9]{1}[0-9]{9}" maxlength="10" required>
          </div>
          <div class="input-container">
    <i class="fa-solid fa-key icon"></i>
        <input class="input-field" type="password" id="password" placeholder="Password" name="npassword" required autocomplete="off">
       <span onclick="myFunction()" class="seye" > <i class="fa-solid fa-eye iconeye "id="eyeii" ></i></span>
      </div>  
      <div class="input-container">
    <i class="fa-solid fa-key icon"></i>
        <input class="input-field" type="=password" placeholder="Confirm Password" name="nCpassword" required autocomplete="off">
      </div>  
      <div class="input-container">
       <!-- <button onclick="popup()" name="submit">Submit</button>  -->
      <input type="submit" value="Sign Up" name="submit" class="btn">
      </div>
      <div class="input-container">
        <h5>Already have an account?</h5>&nbsp;
        <a href="Login.php">Login
      </div>
</form>
</div>
</div>
<script>
 const passwordInput = document.getElementById('password');
const toggleIcon = document.getElementById('eyeii');

eyeii.addEventListener('click', function() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    eyeii.classList.remove('fa-solid fa-eye');
    eyeii.classList.add('fa-solid fa-eye-slash');
  } else {
    passwordInput.type = 'password';
    eyeii.classList.remove('fa-solid fa-eye-slash');
    eyeii.classList.add('fa-solid fa-eye');
  }
});
</script>
        </body>
    </html>
   