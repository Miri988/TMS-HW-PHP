<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <label for="fname">Your name:</label>
    <input type="text" name="fname"> <br/> <br/> 
    <label for="password">Your password:</label> 
    <input type="password" name="pass"> <br/> <br/> 
    <input type="submit" value="Submit">
    </form> 
    <br/>
<?php
//Сделайте так, чтобы после отправки формы на странице результата сравнивался пароль из переменной и пароль из формы. После сравнения сообщите пользователю, правильный он ввел пароль или нет.
$pass = '123456789';
if ((!empty($_POST['pass'])) && $_POST['pass'] === $pass) {
    echo 'Пароль введен верно';
} else { echo 'Неверный пароль';}
?>
</body>
</html>