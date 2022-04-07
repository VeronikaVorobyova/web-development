<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";
?>

<main class="content">
    <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
    <div class="login-form">
        <div class="news">
            <form action="auth.php?action=auth" method="POST">
                <table cellspacing="25" class="maket">
                    <tr>
                        <td class="loginform">Логин: </td>
                        <td class="passwordform">
                            <input required type="text" name="login"></input>
                        </td>
                    </tr>
                    <tr>
                        <td class="loginform">Пароль: </td>
                        <td class="passwordform">
                            <input required type="password" name="password"></input>
                        </td>
                    </tr>
                </table>
                <div class="button">
                    <span class="error">
                        <?php
                            if (isset($_GET['action']))
                                $w = $_GET['action'];
                            else
                                $w = "error";
                            if ($w == "auth") {
                                $user = auth(
                                    $link,
                                    $_POST['login'],
                                    $_POST['password']
                                );
                                print_r($user);
                            } ?>
                    </span>
                    <input class="c-button" type="submit" value="Войти"></input>
                </div>
            </form>
        </div>
    </div>
    <?php } else header("Location: http://localhost/index.php"); ?>
</main>

<?php require_once("footer.php"); ?>