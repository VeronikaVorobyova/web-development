<div id="sidebar">
    <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) { ?>

    <li><a href="/templates/auth.php">Войти в систему</a></li>
    <li><a href="/templates/registration.php">Зарегистрироваться</a></>

        <?php } else if ($_SESSION['admin'] == 1) { ?>

    <li><a href="/templates/addNew.php?action=add&id=0">Добавить новость</a></li>
    <li><a href="/utils/logout.php">Выйти</a></li>

    <?php } else { ?>

    <li> <?php echo $_SESSION['login'] ?> </li>
    <li><a href="/utils/logout.php">Выйти</a></li>

    <?php } ?>
</div>