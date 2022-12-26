<?php
  session_start();
  require_once('service/utils.php');

  if (!isset($_SESSION['user'])) {
    header('Location: /');
    exit();
  } elseif (!isset($_SESSION['role']) || $_SESSION['role'] !== $ROLE_ADMIN) {
    header('Location: /'.getDefaultUrl($_SESSION['role']));
    exit();
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Admin</title>
</head>
<body>
  <div class="huge center aligned header">
    THIS IS ADMIN PAGE!
    <div class="sub header"><?php echo $_SESSION['user']; ?></div>
  </div>
  <a class="button" href="/service/logout.php">Log out</a>
</body>
</html>