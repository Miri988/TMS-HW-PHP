<?php
  session_start();
  if (!isset($_SESSION['user'])) {
    header('Location: /');
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
  <title>User</title>
</head>
<body>
  <div class="huge center aligned header">
    THIS IS USER PAGE!
    <div class="sub header"><?php echo $_SESSION['user']; ?></div>
  </div>
  <a class="button" href="/service/logout.php">Log out</a>
</body>
</html>