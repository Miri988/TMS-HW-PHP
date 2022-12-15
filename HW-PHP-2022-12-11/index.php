<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
</head>
<body>
    <?php
    /*Задан список пользователей с помощью ассоциативного массива. 
    Информация о пользователе: логин, имя, фамилия, отчество, дата рождения, дата регистрации, дата последнего входа в учетную запись, название файла для аватарки. 
    Всю информацию придумываем и заполняем в массив, аватарки - берем любую картинку и сохраняем в папку public (имя сохраненного файла оставляем в массиве).
    На главной странице приложения "mydomain.com/" отображаем список пользователей в виде таблицы (уникальный номер (id), логин, имя и фамилия).
    При нажатии на логин пользователя должна открыться персональная страница выбранного пользователя по адресу "mydomain.com/users/1" (где 1 - это id пользователя в заданном массиве). Т.е. логин должен быть представлен ссылкой.
    На персональной странице пользователя отображаем всю информацию о пользователе в удобном формате + аватар (<img src="public/имяФайлаКоторыйСохранилиВМассиве.png">).
    При формировании веб-страницы приветствуется использовать знания полученный в прошлом модуле (добавить стилей).
    Воспользуйтесь $_SERVER для определения текущего адреса.*/
        $user_array = array (
            array ('id' => 1, 'login' => 'SulleMAN',
                'firstName' => 'Suleiman', 'SurName' => null, 'middleName' => 'Magnificent',
                'born' => '1494-11-04', 'regDate' => '1515-12-01', 'lastLogin' => $_SERVER['REQUEST_TIME'], 'image' => '1_suleiman.jpg'),
            array ('id' => 2, 'login' => 'belCa',
                'firstName' => 'Isabella', 'SurName' => 'Castile', 'middleName' => null,
                'born' => '1451-04-22', 'regDate' => '1463-03-27', 'lastLogin' => $_SERVER['REQUEST_TIME'], 'image' => '2_isabella.jpg'),
            array ('id' => 3, 'login' => 'dizzy',
                'firstName' => 'Marie', 'SurName' => 'Curie', 'middleName' => 'Sklodowska',
                'born' => '1867-11-07', 'regDate' => '1897-01-14', 'lastLogin' => $_SERVER['REQUEST_TIME'], 'image' => '3_marie.jpg'),
            array ('id' => 4, 'login' => 'errNested',
                'firstName' => 'Ernest', 'SurName' => 'Hemingway', 'middleName' => 'Miller',
                'born' => '1899-07-12', 'regDate' => '1920-07-25', 'lastLogin' => $_SERVER['REQUEST_TIME'], 'image' => '4_hemingway.jpg'),
            array ('id' => 5, 'login' => 'coolAlbert1879',
                'firstName' => 'Albert', 'SurName' => 'Einstein', 'middleName' => null,
                'born' => '1879-03-14', 'regDate' => '1901-09-11', 'lastLogin' => $_SERVER['REQUEST_TIME'], 'image' => '5_einstein.jpg'),
            array ('id' => 6, 'login' => 'IronBabe',
                'firstName' => 'Margaret', 'SurName' => 'Thatcher', 'middleName' => 'Hilda',
                'born' => '1925-10-13', 'regDate' => '1942-02-09', 'lastLogin' => $_SERVER['REQUEST_TIME'], 'image' => '6_margaret.png'),
            array ('id' => 7, 'login' => 'appleHunter1642',
                'firstName' => 'Isaac', 'SurName' => 'Newton', 'middleName' => null,
                'born' => '1642-12-25', 'regDate' => '1678-04-12', 'lastLogin' => $_SERVER['REQUEST_TIME'], 'image' => '7_isaac.jpg'),
            array ('id' => 8, 'login' => 'Oxio',
                'firstName' => 'Antoine', 'SurName' => 'Lavoisier', 'middleName' => null,
                'born' => '1743-08-26', 'regDate' => '1764-10-07', 'lastLogin' => $_SERVER['REQUEST_TIME'], 'image' => '8_antonie.jpg'),
            array ('id' => 9, 'login' => 'MadMakz',
                'firstName' => 'James', 'SurName' => 'Maxwell', 'middleName' => 'Clerk',
                'born' => '1831-06-13', 'regDate' => '1878-05-08', 'lastLogin' => $_SERVER['REQUEST_TIME'], 'image' => '9_maxwell.png'),
            array ('id' => 10, 'login' => 'UniverseRuler555',
                'firstName' => 'Napoleon', 'SurName' => 'Bonaparte', 'middleName' => null,
                'born' => '1769-08-15', 'regDate' => '1812-06-30', 'lastLogin' => $_SERVER['REQUEST_TIME'], 'image' => '10_napoleon.jpg')
    );
    $requestUri = $_SERVER['REQUEST_URI'];
    $requestPath = explode ('/', $requestUri);
    if (isset ($requestPath[4])) {
        echo '<table style="border-collapse: collapse; border: 2px solid grey; text-align:center">'; 
        echo '<caption>' . 'Информация о пользователе' . '</caption>';
        echo '
            <thead style="border: 2px solid grey">
            <th style="border: 2px solid grey">Уникальный номер</th>
            <th style="border: 2px solid grey">Фото пользователя</th>
            <th style="border: 2px solid grey">Логин</th>
            <th style="border: 2px solid grey">ФИО</th>
            <th style="border: 2px solid grey"">Дата рождения</th>
            <th style="border: 2px solid grey">Дата регистрации</th>
            <th style="border: 2px solid grey">Дата последнего входа</th>
            </thead>
            ';
        foreach ($user_array as $value) {
            if ($requestPath[4] === (string) $value['id']) {
                echo '<tr style="border: 2px solid grey">
                <td style="border: 2px solid grey">'. $value['id'].'</td>
                <td style="border: 2px solid grey"><img src="/HW-PHP-2022-12-11/public/'. $value['image'].'"></td>
                <td style="border: 2px solid grey">'.$value['login'].'</td>
                <td style="border: 2px solid grey">'. $value['SurName'] .' '. $value['firstName'].' '. $value['middleName'].'</td>
                <td style="border: 2px solid grey"">'. $value['born'].'</td>
                <td style="border: 2px solid grey">'. $value['regDate'].'</td>
                <td style="border: 2px solid grey"> '. date("Y-m-d H:i", $value['lastLogin']).' </td>
                </tr>
                ';
            }
        }
        echo '</table>' . '<br/>';
        echo '<a class="link" href="/HW-PHP-2022-12-11">Back</a>';
        exit;
    }

    if ($requestPath[1] === 'HW-PHP-2022-12-11') {
        echo '<table style="border-collapse: collapse; border: 2px solid grey; text-align:center">'; 
        echo '<caption>' . 'Пользователи' . '</caption>';
        echo '
            <thead style="border: 2px solid grey">
            <th style="border: 2px solid grey">Уникальный номер</th>
            <th style="border: 2px solid grey">Логин</th>
            <th style="border: 2px solid grey">Фамилия</th>
            <th style="border: 2px solid grey">Имя</th>
            </thead>
            '; 
        foreach ($user_array as $value) {
            echo '
                <tr style="border: 2px solid grey">
                <td style="border: 2px solid grey"> '. $value['id'] . ' </td>
                <td style="border: 2px solid grey"> <a href = "/HW-PHP-2022-12-11/index.php/users/'.$value['id'].' "> '.$value['login'].'</a> </td>         
                <td style="border: 2px solid grey"> '. $value['SurName'] . ' </td>
                <td style="border: 2px solid grey"> '. $value['firstName'] . ' </td>
                </tr>
                ';
        }
        echo '</table>'; 
        exit;
    }
    
    ?>
</body>
</html>