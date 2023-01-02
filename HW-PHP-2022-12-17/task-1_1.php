<?php
session_start();
?>

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
        // Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'. Реализуйте с помощью $_SESSION. 
        if (isset($_SESSION['count'])) {
            $_SESSION['count']++;
        } else {
            $_SESSION['count'] = 1;
        }
        echo 'Вы посетили наш сайт ' . $_SESSION['count'] . ' раз в этой сессии!';
    ?>
</body>
</html>
