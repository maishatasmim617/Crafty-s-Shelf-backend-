<?php
@include 'config.php';
session_start();

if (isset($_POST['submit'])) {
   $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
   $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $pass = md5($_POST['pass']);
   $cpass = md5($_POST['cpass']);

   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/' . $image;

   // Check if user already exists
   $check_user = $conn->prepare("SELECT * FROM users WHERE email = ?");
   $check_user->execute([$email]);

   if ($check_user->rowCount() > 0) {
      $message = 'User already exists!';
   } elseif ($pass !== $cpass) {
      $message = 'Passwords do not match!';
   } else {
      $insert_user = $conn->prepare("INSERT INTO users(name, email, password, user_type, image) VALUES(?,?,?,?,?)");
      $insert_user->execute([$name, $email, $pass, 'user', $image]);
      move_uploaded_file($image_tmp_name, $image_folder);
      $message = 'Registered successfully! You can login now.';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Register</title>
   <link rel="stylesheet" href="css/components.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>
<body>

<?php if (isset($message)) echo '<div class="message"><span>' . $message . '</span></div>'; ?>

<section class="form-container">
   <form action="" method="POST" enctype="multipart/form-data">
      <h3>Register Now</h3>
      <input type="text" name="name" class="box" placeholder="Enter your name" required>
      <input type="email" name="email" class="box" placeholder="Enter your email" required>
      <input type="password" name="pass" class="box" placeholder="Enter your password" required>
      <input type="password" name="cpass" class="box" placeholder="Confirm your password" required>
      <input type="file" name="image" class="box" accept="image/png, image/jpeg" required>
      <input type="submit" value="Register Now" class="btn" name="submit">
      <p>Already have an account? <a href="login.php">Login now</a></p>
   </form>
</section>

</body>
</html>
