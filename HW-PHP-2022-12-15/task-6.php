<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
    <label for="number">Enter the array element number:</label>
    <input type="text" name="number"> <br/> <br/> 
    <input type="submit" value="Submit">
    <br/> <br/>
<?php
//Пусть с помощью GET-запроса можно передать число. Сделайте так, чтобы на экран вывелся элемент массива с переданным в запросе номером.
$arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'k', 'l', 'm', 'n'];
if (!empty($_GET['number'])) {
  echo $_GET['number'] . ' element of the array ' . $arr[$_GET['number']];
} 
?>
</body>
</html>