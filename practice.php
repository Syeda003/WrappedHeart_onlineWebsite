
<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Login Form</title>
            <?php include'Links.php' ?>
            <?php include'DBconnect.php' ?>
            <link rel="stylesheet" href="css/StyleLogin.css">
      </head>
<html>
<body>
    <?php
// $category = $_GET['B1'];
@$category = $_POST['category'];
     if($category == 'B1'){
      $select_product1 = mysqli_query($conn, "SELECT * FROM `products` where BrandID = ' $category'") or die('query failed');
      if(mysqli_num_rows($select_product1) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product1)){
            ?>
            <form method="post" class="box" action="">
            <img src="ProductsImg/<?php echo $fetch_product['image']; ?>" alt="">
            <div class="name"><?php echo $fetch_product['name']; ?></div>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="number" min="1" name="product_quantity" value="1">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="submit" value="add to cart" name="add_to_cart" class="btn">
         </form>
      <?php
         };
      };
    };
      ?>
@$box1 = $_POST['form2'];
$box1 = false;
<form method="Post">
      <select name="category" >
         <option value="">All Products</option>
         <option value="B1" name="B1">Box Hamper</option>
         <option value="T2">Tray Hamper</option>
         <option value="G3">Glass Hamper</option>
         <option value="C4">Classic Hamper</option>
         <option value="CH5">Chocolate Bouquet</option>
         <option value="S6">Snack Cone</option>
         
      </select>
  
   
</form>	
</body>
</html>