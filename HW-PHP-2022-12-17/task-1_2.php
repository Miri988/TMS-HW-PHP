<?php
setcookie('count', '');
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
        // Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.  Реализуйте с помощью $_COOKIE.
        if (!isset($_COOKIE['count'])) {
            setcookie('count', 1);
            $_COOKIE['count'] = 1;
        } else {
            setcookie('count', ++$_COOKIE['count']);
        }
        echo 'Вы посетили наш сайт  ' . $_COOKIE['count'] . ' раз в этой сессии!';
    ?>
</body>
</html>