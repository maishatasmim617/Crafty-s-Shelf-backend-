<?php
@include 'config.php';
session_start();

// ✅ Generate CSRF token if not already set
if (!isset($_SESSION['csrf_token'])) {
   $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// ✅ Session timeout handling (10 minutes)
$timeout_duration = 600;
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
   session_unset();
   session_destroy();
   header('location:login.php');
   exit();
}
$_SESSION['LAST_ACTIVITY'] = time();

// ✅ Check admin session
$admin_id = $_SESSION['admin_id'] ?? null;
if (!$admin_id) {
   header('location:login.php');
   exit();
}

// ✅ Handle delete with CSRF token validation
if (isset($_GET['delete']) && isset($_GET['token'])) {
   if (hash_equals($_SESSION['csrf_token'], $_GET['token'])) {
      $delete_id = $_GET['delete'];
      $delete_stmt = $conn->prepare("DELETE FROM `message` WHERE id = ?");
      $delete_stmt->execute([$delete_id]);
      $_SESSION['toast'] = "Message deleted successfully!";
   } else {
      $_SESSION['toast'] = "Invalid CSRF token!";
   }
   header('location:admin_contacts.php');
   exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Admin Messages</title>
   <link rel="stylesheet" href="css/admin_style.css">
</head>
<body>

<!-- ✅ Toast Notification -->
<?php if (isset($_SESSION['toast'])): ?>
   <div class="toast"><?= $_SESSION['toast']; ?></div>
   <script>
      setTimeout(() => {
         const toast = document.querySelector('.toast');
         if(toast) toast.style.display = 'none';
      }, 3000);
   </script>
   <?php unset($_SESSION['toast']); ?>
<?php endif; ?>

<section class="messages">
   <h1 class="title">User Messages</h1>

   <div class="box-container">
      <?php
      $select = $conn->prepare("SELECT * FROM `message` ORDER BY created_at DESC");
      $select->execute();

      if ($select->rowCount() > 0) {
         while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
      ?>
         <div class="box">
            <p>user id : <span><?= htmlspecialchars($row['user_id']) ?></span></p>
            <p>name : <span><?= htmlspecialchars($row['name']) ?></span></p>
            <p>number : <span><?= htmlspecialchars($row['number']) ?></span></p>
            <p>email : <span><?= htmlspecialchars($row['email']) ?></span></p>
            <p>message : <span><?= htmlspecialchars($row['message']) ?></span></p>
            <a href="admin_contacts.php?delete=<?= $row['id'] ?>&token=<?= $_SESSION['csrf_token'] ?>"
               class="delete-btn"
               onclick="return confirm('Delete this message?');">delete</a>
         </div>
      <?php
         }
      } else {
         echo '<p class="empty">you have no messages!</p>';
      }
      ?>
   </div>
</section>

</body>
</html>
