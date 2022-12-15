<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Summ numbers</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <label for="fname">Enter 1 number:</label>
    <input type="text" name="fname"> <br/> <br/> 
    <label for="sname">Enter 2 number:</label> 
    <input type="text" name="sname"> <br/> <br/> 
    <label for="tname">Enter 3 number:</label> 
    <input type="text" name="tname"> <br/> <br/> 
    <input type="submit" value="Submit">
    </form> 
    <br/>
<?php
//Сделайте форму с тремя инпутами. Пусть в эти инпуты вводятся числа. После отправки формы выведите на экран сумму этих чисел.
if (!empty($_POST['fname']) && !empty($_POST['sname']) && !empty($_POST['tname'])) {
    $sum = (int) $_POST['fname'] + (int) $_POST['sname'] + (int) $_POST['tname'];
    echo 'Сумма введеных чисел - ' . $sum;
}
?>
</body>
</html>