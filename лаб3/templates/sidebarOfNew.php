<div id="sidebar">
    <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) { ?>

    <a href="/templates/auth.php">Войти в систему</a>
    <a href="/templates/registration.php">Зарегистрироваться</a></>

    <?php } else if ($_SESSION['admin'] == 1) { ?>

    <a href="/templates/addNew.php?action=edit&id=<?php echo $id ?>">Изменить</a>
    <a href="/utils/deleteNew.php?id=<?php echo $id ?>">Удалить</a>
    <a href="/utils/logout.php">Выйти</a>

    <?php } else { ?>

    <?php echo $_SESSION['login'] ?>
    <a href="/utils/logout.php">Выйти</a>

    <?php } ?>
</div>