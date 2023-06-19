<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <?php include'Links.php' ?>
  <link rel="stylesheet" href="css/Home1.css">
<body>

  <nav class="navbar nav_style navbar-expand-lg  text-bg-teritory fixed-top ">
    <div class="container ">

      <img src="images\Logo.png" weidth="50px" height="50px">

      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0"> -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="HomeProducts.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Contact</a>
          </li>&nbsp;&nbsp;&nbsp;
          <li class="nav-item dropdown" >
            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-toggle="tooltip" title="Account">
              <i class="fa-solid fa-circle-user"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Signup1.php">Sign Up</a></li>
              <li><a class="dropdown-item" href="Login.php">Login</a></li>
              <li><a class="dropdown-item" href="#">Change Password</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="Main.php">Logout</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="#"></a>
          </li>
        </ul>
      </div>
     
    </div>
    
  </nav>
  <!-- <i class="fa-solid fa-right-to-bracket"></i> -->
  <section class="homesec">
    <div class="home">
      <img src="images\Owner Page.png" class="card-img">
    </div>
  </section>

  <!-------------------------------------------------About-------------------------------->
  <section class="aboutsec">
    <div class="container ">
      <h1 class="text-center">About Us</h1>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-6 box2 d-flex">

          <img src="images\Gift Unboxing (HD).png" width="820px"
            height="320px">
          <!-- <img src="C:\Users\SYED\Desktop\6th sem BCA(Project)\0 Home page\Things In A Box.gif"width="420px" height="300px">   -->
        </div>
        <div class="col-12 col-md-12 col-lg-6 box1 d-flex flex-column">
          <h2>Why choose us?</h2>
          <p>Our hampers has unique gift hampers and custom gift boxes online that can be personalised to include all
            their favourite goodies!
            And you can find a wide range of special gifts online and curated gift boxes at the click of your mouse.
            There’s no need for searching far and wide when we have all you need right here.</p>
          <div>
            <input type="submit" value="Read more...">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!------------------------------------IMAGE SLIDER-------------------------------------------------->
  <section class="imgsec">
    <h1 class="text-center">Unique Gifts Curated With Love!</h1>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">

      <div class="carousel-inner">
        <div class="carousel-item active item">
          <img src="images\Product Introduction.png"
            class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item  item">

          <img src="images\Business Story.png"
            class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item item">
          <img src="images\Quote.jpg" class="d-block w-100"
            alt="...">
        </div>
        <div class="carousel-item item">
          <img src="images\Cover Page.jpg" class="d-block w-100"
            alt="...">
        </div>
      </div>
      <button class="carousel-control-prev iconss" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <i class="fa-solid fa-circle-chevron-left "></i>
      </button>
      <button class="carousel-control-next iconss" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <i class="fa-solid fa-circle-chevron-left fa-rotate-180 " id="iconss"></i>
      </button>
    </div>
  </section>

  <!------------------------------------------------TEAM---------------------------------->
 <section class="new">
 <div class="container cc">
 <h1 class="text-center">------Team Members------</h1><br>
 <div class="main-card ">
      <div class="cards">
  <div class="card">
         <div class="content">
           <div class="img">
            <img src="images/Anya.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Jasmine Carter</div>
             <div class="job">UI Designer</div>
           </div>
           <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-youtube"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/Azusagawa-Sakuta.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Nicole Lewis</div>
             <div class="job">Web Devloper</div>
           </div>
           <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-youtube"></i></a>
           </div>
         </div>
        </div>
        <div class="card">
         <div class="content">
           <div class="img">
             <img src="images/kid.jpg" alt="">
           </div>
           <div class="details">
             <div class="name">Nicole Lewis</div>
             <div class="job">Web Devloper</div>
           </div>
           <div class="media-icons">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i class="fab fa-twitter"></i></a>
             <a href="#"><i class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-youtube"></i></a>
           </div>
         </div>
        </div>
</div>
</div>
</div>
</section>
  
  <!---------------------------------------------CONTACT-------------------------------->
  <section class="contSec">
    <div class="container contDiv">
      <h1 class="text-center">Contact</h1>
      <div class="row">

        <div class="col-12 col-md-12 col-lg-6 box4 d-flex flex-column">
          <form>
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message:</label>
              <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Submit">
            </div>
          </form>
        </div>

        <div class="col-12 col-md-12 col-lg-6 box3 d-flex">
          <img src="images\Social Media Content Phone.gif"
            width="720px" height="420px">
          <!-- <img src="C:\Users\SYED\Desktop\6th sem BCA(Project)\0 Home page\Things In A Box.gif"width="420px" height="300px">   -->
        </div>
      </div>
    </div>
  </section>

  <!-------------------------FOOTER---------------------->
  <section>
    <div class="container ">
      
      <div class="row">
        <div class="col-12 col-md-12 col-lg-6 DelBox d-flex flex-column">
          <h1 >Always Delivered on time!!</h1>
          <h3>Make your loved ones feel special.</h3>
          
        </div>
        <div class="col-12 col-md-12 col-lg-6 Delgif d-flex">
          <img src="images\Delivery Truck.gif" width="500px"
            height="320px">
        </div>
      </div>
    </div>
  </section>


  <section class="FootSec">
    <div class="container footdiv">
      <div class="row">
        <div class="col-12 col-md-11 col-lg-4 infobox d-flex flex-column ">
          <h5>Contact Info</h5>
          <ul>
            <li><i class="fa-solid fa-phone-volume" style="color: #1f5120;"></i>&nbsp; +91 8646273527</li>
            <li><i class="fa-solid fa-envelope" style="color: #e1f014;"></i>&nbsp; wrappedhearts@gmai.com</li>
            <li><i class="fa-solid fa-map-location-dot" style="color: #5d6b14;"></i>&nbsp; 4671 sugar camp road austuown babglore- 560048</li>
          </ul>
          <div>
          <i class="fa-brands fa-twitter" style="color: #511f46;"></i>&nbsp;
          <i class="fa-brands fa-facebook" style="color: #2254aa;"></i>&nbsp;
          <i class="fa-brands fa-instagram" style="color: #ce1280;"></i>&nbsp;
          <i class="fa-brands fa-linkedin" style="color: #305491;"></i>
        </div>
        </div>
        <!-- <div class="col-12 col-md-11 col-lg-4  d-flex flex-column">
          
        </div>
        <div class="col-12 col-md-11 col-lg-4  d-flex flex-column">
         
        </div> -->
      </div>
    </div>
  

  </section>
</body>

</html>