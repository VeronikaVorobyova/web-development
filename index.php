<?php
$host = '127.0.0.1'; // адрес сервера
$db_name = 'mysite'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

// создание подключения к базе
$connection = @mysqli_connect($host, $user, $password, $db_name);
$query = 'SET NAMES utf8';
$result = @mysqli_query($connection, $query);

// текст SQL запроса, который будет передан базе
$query = 'SELECT * FROM news WHERE id = 1';

// выполняем запрос к базе данных
$result = @mysqli_query($connection, $query);

// закрываем соединение с базой
mysqli_close($connection);
?>

<div id="news1">
    <div id="data1">
        <p>
            <?php echo $row["data"]; ?>
        </p>
    </div>
    <a href="src/news1.html">

        <img src="src/image/Hockey.jpg" style="width: 200px" alt="" />
        <p class="news">
            Сборная России по хоккею победила датчан в матче олимпийского турнира
        </p>
        <p>
            Сборная России по хоккею выиграла у команды Дании в матче группового турнира на Олимпиаде в Пекине.
            Встреча завершилась со счетом…
        </p>
    </a>
</div>