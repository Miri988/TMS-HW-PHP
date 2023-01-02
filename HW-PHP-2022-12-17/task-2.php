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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <label for="name">Ваше имя</label>
    <input type="text" name="name" required>
    <label for="date">Введите дату рождения </label>
    <input type="text" name="date" required>
    <input type="submit" value="Submit">
    </form> 
    <?php
    // Спросите дату рождения пользователя. При следующем заходе на сайт напишите сколько дней осталось до его дня рождения. Если сегодня день рождения пользователя - поздравьте его!
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['date'] = $_POST['date'];
    $dayMonth = substr($_SESSION['date'], 0, 5);
    if (!preg_match('/\d{2}-\d{2}-\d{4}/', $_SESSION['date'])) {
        echo 'Неверный формат даты! (ожидается dd-mm-yyyy)';
      } elseif (date('d-m', time()) == $dayMonth) {
        echo 'С днем рождения, ' . $_SESSION['name'] . '!';
      } else {
        $date = explode('-', $_SESSION['date']);
        $date = mktime(0, 0, 0, $date[1], $date[0], date('Y') + ($date[1].$date[0] <= date('md')));
        $days_until = ceil(($date - time()) / 86400);
        echo "До дня рождения осталось  $days_until дней";
    }
    session_destroy();
    ?>
</body>
</html>
