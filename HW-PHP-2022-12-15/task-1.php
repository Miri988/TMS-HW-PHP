<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello!</title>
</head>
  <body>
      <?php
      //С помощью формы спросите имя пользователя. После отправки формы поприветствуйте пользователя по имени, а форму уберите.
      if (empty($_POST['name'])) {
      ?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
  <label for="name">What is your name? </label>
  <input type="text" name="name">
  <input type="submit" value="Submit">
  </form> 
      <?php
      } else {
        echo 'Hello, ' . htmlspecialchars($_POST['name']) . '!';
      }
      ?>
</body>
</html>