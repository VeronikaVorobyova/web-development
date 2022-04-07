<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/function.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/connect.php";

$act = $_GET['action'];
$id = $_GET['id'];

?>
<main class="content">
    <div class="block-news">
        <div class="news">
            <form enctype="multipart/form-data" action="addNew.php?action=<?= $act ?>" method="POST">
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
                    <span class="error">
                        <?php

                        if (isset($_REQUEST['action']))
                            $w = $_REQUEST['action'];
                        else
                            $w = "error";
                        if ($w == "add") {
                            $user = addNew(
                                $link,
                                $_POST['title'],
                                $_POST['preview'],
                                $_POST['full_text'],
                                $_POST['pic'],
                            );
                            print_r($user);
                        }
                        if ($w == "edit") {
                            $user = editNew(
                                $link,
                                $id,
                                $_POST['title'],
                                $_POST['preview'],
                                $_POST['full_text'],
                                $_POST['pic'],
                            );
                            print_r($user);
                        }
                        ?>
                    </span>
                    <input class="c-button" type="submit" value="Выполнить">
                </div>
            </form>
        </div>
    </div>
</main>