<head>
    <!-- <link rel="stylesheet" href="/templates/style/mainPage.css"> -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>

<div id="sidebar">
    <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) { ?>

    <nav class="nav flex-column">

        <a class="nav-link active" aria-current="page" href="/templates/auth.php">Войти в систему</a>
        <a class="nav-link active" aria-current="page" href="/templates/registration.php">Зарегистрироваться</a>
        <?php } else if ($_SESSION['admin'] == 1) { ?>

        <a class="nav-link" href="/templates/addNew.php?action=add&id=0">Добавить новость</a>
        <a class="nav-link" href="/utils/logout.php">Выйти</a>
        <?php } else { ?>
        <?php echo "Здравствуй, " ?>

        <?php echo  $_SESSION['login'] ?>
        <br>
        <a class="nav-link" href="/utils/logout.php">Выйти</a>
    </nav>

    <?php } ?>
</div>