<!DOCTYPE html>
<html>
    <head>
    <title>Forgot Password</title>
            <?php include'Links.php' ?>
            <?php include'DBconnect.php' ?>
            <link rel="stylesheet" href="StyleForgot.css">

    </head>


    <?php
   
if(isset($_POST['submit'])){
    $email = $_POST['nemail'];
  
    $email_search="select * from signupdb where email = '$email'";
    $query = mysqli_query($conn,$email_search);

    $email_count = mysqli_num_rows($query);
   
   
    if($email_count==1){
        
        // $pass = mysqli_fetch_assoc($query);
        // $db_pass = $pass['Password'];
        $newPassword = substr(md5(uniqid(mt_rand(), true)), 0, 8);
        $hashedPassword = md5($newPassword);
        $sql = "UPDATE signupdb SET Password = '$hashedPassword', CPassword = '$hashedPassword' WHERE Email = '$email'";
        if(mysqli_query($conn,$sql))
        {
            ?>
            <script>
                alert("Successful");
            </script>
            <?php
        }
        else{
            ?>
            <script>
                alert("Failed");
            </script>
            <?php
        }
        ?>
        <script>
         var variableData = "<?php echo $newPassword; ?>";
         alert(variableData);
        </script>
        <?php
      
    }
        else{
            ?>
            <script>
                alert("Invalid email")
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
         <a href="Login.php" data-toggle="tooltip" title="Login"><i class="fa-solid fa-right-to-bracket fa-rotate-180"></i></a> 
       <h5>Forgot</h5>&nbsp;&nbsp;
       <h5>Password</h5>
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
             <input class=" btn" type="submit" value="Submit" name="submit">
       </div>
       
       </form>
   </div>
   </div>
   </div>
     </div>
    </body>
</html>