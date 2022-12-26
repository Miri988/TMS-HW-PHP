<?php
session_start();

$error = $_SESSION['error'] ?? null;
unset($_SESSION['error']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <title>Login</title>
</head>
<body>
  <div class="big header">LOGIN</div>
  <form class="login form" action="/service/login.php" method="post">
    <?php if ($error) :?>
      <div class="field">
        <div class="small fluid message">
          <?php echo $error; ?>
        </div>
      </div>
    <?php endif; ?>
    <div class="field">
      <input type="text" placeholder="..." name="login" required />
    </div>
    <div class="field">
    <input type="password" placeholder="..." name="password" required />
    </div>
    <div class="right aligned field">
      <button class="button">Log In</button>
    </div>
  </form>
</body>
</html>