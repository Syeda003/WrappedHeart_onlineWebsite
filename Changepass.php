<!DOCTYPE html>
<html>
    <head>
    <title>Change Password</title>
            <?php include'Links.php' ?>
            <?php include'DBconnect.php' ?>
            <link rel="stylesheet" href="css/StyleChange.css">

    </head>

    <?php
if(isset($_POST['submit'])){
    $email = $_POST['nemail'];
    $oldpassword = $_POST['noldpassword'];
    $newpassword = $_POST['nnewpassword'];
    $cpassword = $_POST['ncpassword'];

    $sql="select * from signupdb where Email = '$email' AND Password = '".md5($oldpassword)."'";
    $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result); 

    if($count == 1){
        // $pass = mysqli_fetch_assoc($query);
        if($newpassword == $cpassword){
        $sql = "UPDATE signupdb SET Password = '".md5($newpassword)."' WHERE Email = '$email'";
        // $db_pass = $pass['Password'];

        // $pass_decode = password_verify($noldpassword,$db_pass);
        $result=mysqli_query($conn,$sql);
        
        if ($result){
            ?>
            <script>
                alert("Successful");
            </script>
            <?php
          
        }
        else{
            ?>
    <script>
        alert("Password do not match");
    </script>
    <?php
        }
      }
        else{
            ?>
            <script>
                alert("Error")
            </script>
            <?php
        }
    }
    else{
        ?>
            <script>
                alert("old password do not match");
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
       <h5>Change</h5>&nbsp;&nbsp;
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
           <i class="fa-solid fa-key icon"></i>
           <input class="form-control" type="password" placeholder="Old Password" name="noldpassword" required autocomplete="off">
       </div> 
       <div class="form-group">
           <i class="fa-solid fa-key icon"></i>
           <input class="form-control" type="password" placeholder="New Password" name="nnewpassword" required autocomplete="off">
       </div>   
       <div class="form-group">
           <i class="fa-solid fa-key icon"></i>
           <input class="form-control" type="password" placeholder="Confirm Password" name="ncpassword" required autocomplete="off">
       </div>   
       <div class="form-group">
             <input class=" btn" type="submit" value="Change" name="submit">
       </div>
       
       </form>
   </div>
   </div>
   </div>
     </div>
    </body>
</html>