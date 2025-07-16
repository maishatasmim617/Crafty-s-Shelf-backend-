<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Shopping Cart</title>

   <!-- Font Awesome CDN Link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/style.css" />
</head>
<body>

   <!-- Header Placeholder -->
   <header>
      <h1>Site Header</h1>
   </header>

   <section class="shopping-cart">
      <h1 class="title">Products Added</h1>

      <div class="box-container">

         <!-- Sample Product 1 -->
         <form action="#" method="POST" class="box">
            <a href="cart.html?delete=1" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
            <a href="view_page.html?pid=1" class="fas fa-eye"></a>
            <img src="images/doll.jpg" alt="Product Image" />
            <div class="name">Handmade Doll</div>
            <div class="price">$25.00/-</div>
            <input type="hidden" name="cart_id" value="1" />
            <div class="flex-btn">
               <input type="number" min="1" value="2" class="qty" name="p_qty" />
               <input type="submit" value="update" name="update_qty" class="option-btn" />
            </div>
            <div class="sub-total">sub total : <span>$50.00/-</span></div>
         </form>

         <!-- Sample Product 2 -->
         <form action="#" method="POST" class="box">
            <a href="cart.html?delete=2" class="fas fa-times" onclick="return confirm('delete this from cart?');"></a>
            <a href="view_page.html?pid=2" class="fas fa-eye"></a>
            <img src="images/sari.jpg" alt="Product Image" />
            <div class="name">Bangladeshi Sari</div>
            <div class="price">$30.00/-</div>
            <input type="hidden" name="cart_id" value="2" />
            <div class="flex-btn">
               <input type="number" min="1" value="1" class="qty" name="p_qty" />
               <input type="submit" value="update" name="update_qty" class="option-btn" />
            </div>
            <div class="sub-total">sub total : <span>$30.00/-</span></div>
         </form>

         <!-- If cart is empty -->
         <!-- <p class="empty">your cart is empty</p> -->

      </div>

      <div class="cart-total">
         <p>grand total : <span>$55.00/-</span></p>
         <a href="shop.html" class="option-btn">Continue Shopping</a>
         <a href="cart.html?delete_all" class="delete-btn">Delete All</a>
         <a href="checkout.html" class="btn">Proceed to Checkout</a>
      </div>
   </section>

   <!-- Footer Placeholder -->
   <footer>
      <p>Footer content here</p>
   </footer>

   <script src="js/script.js"></script>
</body>
</html>
