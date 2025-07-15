<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search Page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<section class="search-form">
   <form action="" method="POST">
      <input type="text" class="box" name="search_box" placeholder="search products...">
      <input type="submit" name="search_btn" value="search" class="btn">
   </form>
</section>

<section class="products" style="padding-top: 0; min-height:100vh;">
   <div class="box-container">
      <form action="" class="box" method="POST">
         <div class="price">
            <span>350 tk</span>/- 
         </div>
         <a href="view_page.php?pid=[PRODUCT_ID]" class="fas fa-eye"></a>
         <img src="img/OIP.jpeg" alt="Tote Bag">
         
         <div class="name">tote bag</div>
         <div class="details">Hand made bag. length: 13 inch</div>
         
         <div class="stock">Available: <span>9</span></div>
         
         <input type="hidden" name="pid" value="[PRODUCT_ID]">
         <input type="hidden" name="p_name" value="tote bag">
         <input type="hidden" name="p_price" value="350">
         <input type="hidden" name="p_image" value="OIP.jpeg">
         <input type="hidden" name="p_stock" value="9"> 

         <input type="number" min="1" value="1" name="p_qty" class="qty" max="9">
         
         <input type="submit" value="add to wishlist" class="option-btn" name="add_to_wishlist">
         <input type="submit" value="add to cart" class="btn" name="add_to_cart">
      </form>
      </div>
</section>


</body>
</html>