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
                    <label for="inputEmail4" class="form-label"></label>
                    <input required type="text" name="login" class="form-control" id="inputEmail4" placeholder="Введите логин"> </input>
                    <br>
                    <label for="inputPassword4" class="form-label"></label>
                    <input required type="text" name="password" class="form-control" id="inputPassword4" placeholder="Введите пароль"> </input>
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
                            <button type="submit" class="btn btn-outline-primary">
                                    Вход
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