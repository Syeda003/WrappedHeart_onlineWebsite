<!DOCTYPE html>
<html>
    <head>
        <title>Main Form</title>
        <?php include'Links.php' ?>
        <link rel="stylesheet" href="Stylemain1.css"> 
            
    </head>
   <body>
   <div class="form_bg ">
    <div class="container">

    <a  href="AdminLogin.php" class="user" role="button"  data-toggle="tooltip" title="Admin Login">
   <i class="fa-solid fa-circle-user"></i> </a>  

    <div class="row">
    <div class="col-12 col-md-12 col-lg-6 box2 ">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="form-group">
    <img src="images\Logo-removebg-preview.png" width="100px" height="100px">  
   
        <h2>Wrapped hearts</h2>
        <p>Gifting studio</p>
       <h2>One stop solution for all gifting problems!</h2>
    </div>   
    <br>
    <div class="form-group">
    <button id="btn"> <a href="Login.php"><i class="fa-solid fa-right-to-bracket" ></i> Explore!</a></button>
    </div>
  
    </div>
    
    <div class="col-12 col-md-12 col-lg-6 box3 ">    
       
      <img src="images\Online Store.gif" width="400px" height="500px">    
    </form>

</div>
</div>
</div>
  </div>
 
   </body>
</html>