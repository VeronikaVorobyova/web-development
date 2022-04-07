<head> 
    <link rel="stylesheet" href="/templates/style/mainPage.css">
</head>

<div id="sidebar">
    <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) { ?>

    <a href="/templates/auth.php">Войти в систему</a>
    <a href="/templates/registration.php">Зарегистрироваться</a>

        <?php } else if ($_SESSION['admin'] == 1) { ?>

    <a href="/templates/addNew.php?action=add&id=0">Добавить новость</a>
    <a href="/utils/logout.php">Выйти</a>

    <?php } else { ?>
        <?php echo "Здравствуй, " ?>   
        
     <?php echo  $_SESSION['login'] ?> 
     <br>
    <a href="/utils/logout.php">Выйти</a>

    <?php } ?>
</div>