<!-- <link rel="stylesheet" href="/templates/style/styleAuth.css">

<div id="content">
    <div class="windows">

        <p class="reg-text">Регистрация</p>
        <p>
            <input type="text" placeholder="Введите email"> </input>
            <br>
            <input type="text" placeholder="Введите пароль"> </input>
        </p>
        <form>
            <button>
                <p class="buttomtext">Зарегистрироваться
            </button>
        </form>
    </div>
</div> -->

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";

// $ans=registr($conn);
?>
<main class="content">
    <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
    <div class="login-form">
        <div class="news">
            <form action="registration.php?action=reg" method="POST">
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
                            if (isset($_REQUEST['action'])) $w = $_REQUEST['action'];
                            else
                                $w = "error";
                            if ($w == "reg") {
                                $user = registration(
                                    $conn,
                                    $_POST['login'],
                                    $_POST['password']
                                );
                                print_r($user);
                            } ?>
                    </span>
                    <input class="c-button" type="submit" value="Зарегестироваться"></input>
                </div>
            </form>
        </div>
    </div>
    <?php } else header("Location: index.php"); ?>
</main>

<?php require_once("footer.php"); ?>