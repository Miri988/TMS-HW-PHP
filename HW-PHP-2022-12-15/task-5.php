<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Country</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<label for="country">Country:</label>
<select name="country">
      <option>Change country</option>
      <option>Belarus</option>
      <option>Poland</option>
      <option>USA</option>
      <option>Montenegro</option>
      <option>Narnia</option>
      <option>Monaco</option>
      <option>France</option>
      <option>3/9 Kingdom</option>
      <option>Italy</option>
  </select>

  <input type="submit" value="Submit">
</form> 
<?php
//С помощью выпадающего списка предложите пользователю выбрать страну, в которой он живет. Список стран задан в качестве массива и используется для создания формы.
if (!empty($_POST['country'])) {
  echo 'Вы живете в ' . $_POST['country'];
}
?>
</body>
</html>