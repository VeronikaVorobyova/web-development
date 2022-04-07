<?php
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
                        <td class="leftcol">Заголовок</td>
                        <td class="rightcol"> <input required type="text" name="title">
                            </input>
                        </td>
                    </tr>

                    <tr>
                        <td class="leftcol">Превью</td>
                        <td class="rightcol"> <textarea required name="preview" class="text-preview">
                                </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="leftcol">Полный текст</td>
                        <td class="rightcol"> <textarea required name="full_text">
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
                <div class="button">
                    <input class="c-button" type="submit" name="confirm" value="Выполнить">
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
                                header("Location: http://localhost/index.php");
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
                                header("Location: http://localhost/index.php");
                            }
                        }
                        ?>
                    </span>
                </div>
            </form>
        </div>
    </div>
</main>