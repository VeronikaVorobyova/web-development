<head>
    <link rel="stylesheet" href="/templates/style/addNew.css">
</head>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/templates/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/connect.php";

$act = $_GET['action'];
$id = $_GET['id'];

?>
<main class="content">
    <div class="block-news">
        <div class="news">
            <form enctype="multipart/form-data" action="addNew.php?action=<?= $act ?>&id=<?= $id ?>" method="POST">
                <table cellspacing="25" class="maket">
                    <tr>
                        <td class="leftcol">Заголовок новости</td>
                        <td class="rightcol"> <input required type="text" name="title">
                            </input>
                        </td>
                    </tr>

                    <tr>
                        <td class="leftcol">Превью</td>
                        <td class="rightcol"> <textarea required name="preview" id="preview" type="text">
                                </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="leftcol">Текст новости</td>
                        <td class="rightcol"> <textarea required name="full_text" id="fulltext" type="text">
                            </textarea>
                        </td>
                    </tr>

                    <tr>
                        <td class="leftcol">Путь к картинке</td>
                        <td class="rightcol"> <input required type="text" name="pic">
                            </input>
                        </td>
                    </tr>

                </table>

                <button class="buttontext" type="submit" name="confirm" value="">Отправить
                    <span class="error">
                        <?php
                        if (isset($_POST['confirm'])) {

                            if (isset($_GET['action']))
                                $w = $_GET['action'];
                            else
                                $w = "error";
                            if ($w == "add") {

                                $title = $_POST['title'];
                                $preview = $_POST['preview'];
                                $full_text = $_POST['full_text'];
                                $pic = $_POST['pic'];

                                $user = addNew(
                                    $link,
                                    $title,
                                    $preview,
                                    $full_text,
                                    $pic
                                );
                                print_r($user);
                                sleep(1);
                                header("Location: http://127.0.0.1/index.php");
                            }
                            if ($w == "edit") {

                                $title = $_POST['title'];
                                $preview = $_POST['preview'];
                                $full_text = $_POST['full_text'];
                                $pic = $_POST['pic'];

                                $user = editNew(
                                    $link,
                                    $id,
                                    $title,
                                    $preview,
                                    $full_text,
                                    $pic
                                );
                                print_r($user);
                                sleep(1);
                                header("Location: http://127.0.0.1/index.php");
                            }
                        }
                        ?>
                    </span>
                </button>
            </form>
        </div>
    </div>
</main>
<?php require_once("footer.php"); ?>