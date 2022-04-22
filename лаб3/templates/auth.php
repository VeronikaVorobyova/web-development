<head>
    <link rel="stylesheet" href="/templates/style/styleAuth.css">
</head>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";
?>

<main class="reg_content">
    <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
    <div class="login-form">
        <form action="auth.php?action=auth" method="POST">
            <div id="content">
                <div class="windows">
                    <p class="regtext">Вход</p>
                    <p>
                        <input required type="text" name="login" placeholder="Введите логин"> </input>
                        <br>
                        <input required type="text" name="password" placeholder="Введите пароль"> </input>
                    </p>

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
                        <form>
                            <button>
                                <p class="buttontext" type="submit" value="">Войти
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <?php } else header("Location: http://127.0.0.1/index.php"); ?>
</main>

<?php require_once("footer.php"); ?>