<?php

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
                        <td class="rightcol"> <input required type="text" name="title" value="<?= $row['title'] ?>">
                            </input>
                        </td>
                    </tr>

                    <tr>
                        <td class="leftcol">Превью</td>
                        <td class="rightcol"> <textarea required name="preview" class="text_pre-view">
                                <?= $row['preview'] ?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td class="leftcol">Полный текст</td>
                        <td class="rightcol"> <textarea required name="full_text">
                            <?= $row['full_text'] ?>
                        </textarea>
                        </td>
                    </tr>

                    <tr>
                        <td class="leftcol">Путь к картинке</td>
                        <td class="rightcol"> <input required type="text" name="pic">
                            <?= $row['pic'] ?>
                            </input>
                        </td>
                    </tr>
                </table>
                <div class="button">
                    <input class="c-button" type="submit" value="Отправить">
                </div>