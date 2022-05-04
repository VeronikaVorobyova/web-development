<head>
    <link rel="stylesheet" href="/templates/style/styleAuth.css">
</head>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";
?>

<main class="content">
    <?php if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
    ?>
        <div class="login-form">
            <div class="news">
                <form action="registration.php?action=reg" method="POST">
                    <div id="content">
                        <div class="windows">

                            <p class="regtext">Регистрация</p>
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
                                    if (isset($_REQUEST['action']))
                                        $w = $_REQUEST['action'];
                                    else
                                        $w = "error";
                                    if ($w == "reg") {
                                        $user = registration(
                                            $link,
                                            $_POST['login'],
                                            $_POST['password']
                                        );
                                        $user = auth(
                                            $link,
                                            $_POST['login'],
                                            $_POST['password']
                                        );
                                        print_r($user);
                                    } ?>
                                </span>
                                <button type="submit" class="btn btn-outline-primary">
                                    Поехали!
                                </button>
                            </div>
                </form>
            </div>
        </div>
    <?php } else header("Location: http://127.0.0.1/index.php"); ?>
</main>

<?php require_once("footer.php"); ?>