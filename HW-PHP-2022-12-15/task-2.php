<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <label for="fname">What is your name? </label>
    <input type="text" name="fname"> <br/> <br/> 
    <label for="fname">How old are you? </label>
    <input type="text" name="age"> <br/> <br/> 
    <label for="fname">What is your salary? </label>
    <input type="text" name="salary"> <br/> <br/> 
    <input type="submit" value="Submit">
    </form> 
    <br/>
<?php
//Сделайте форму с тремя инпутами, в которые можно ввести имя, возраст и зарплату пользователя.
if (!empty($_POST['fname']) && !empty($_POST['age']) && !empty($_POST['salary'])) {
    echo 'Добро пожаловать, ' . htmlspecialchars($_POST['fname']) . '!' . '<br/>';
    echo 'Вам ' .(int) $_POST['age'] . ' лет.' . '<br/>';
    echo 'Ваша зарплата - ' .(int) $_POST['salary'] . '$' . '<br/>';

}
?>
</body>
</html>