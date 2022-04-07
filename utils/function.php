<?php

function countNews($link)
{
    $obj = $link->query("SELECT COUNT(*) AS count FROM news");
    $res = $obj->fetch_assoc();
    $count = $res['count'];
    return $count;
}

function showAllNews($link)
{
    $result = $link->query("SELECT * FROM news ORDER BY data DESC");
    return $result;
}

function pickOneNew($link, $id)
{
    $stmt = $link->prepare("SELECT * FROM news WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        return $stmt->get_result()->fetch_assoc();
    } else {
        return "Такой новости не существует";
    }
}

function addNew($link, $title, $preview, $full_text, $pic)
{
    if ($stmt = $link->prepare("INSERT INTO news(title, preview, full_text, pic)VALUES (?, ?, ?, ?)")) {
        $stmt->bind_param("ssss", $title, $preview, $full_text, $pic);

        if ($stmt->execute()) {
            return "Новость добавлена успешно";
        } else {
            return "Новость не была добавлена";
        }
    } else {
        return "Что-то пошло не так";
    }
}

function deleteNew($link, $id)
{
    $stmt = $link->prepare("DELETE FROM news WHERE news.id = ?");
    $stmt->bind_param("s", $id);

    if ($stmt->execute()) {
        return "Новость удалена";
    } else {
        "Новость не удалена: что-то пошло не так";
    }
}

function edit($link, $id, $title, $preview, $full_text, $image)
{

    if ($stmt = $link->prepare("UPDATE news SET title=?, date=?, preview=?, full_text=?, image=? WHERE id=?")) {

        $stmt->bind_param("ssssi", $title, $preview, $full_text, $image, $id);

        if ($stmt->execute())
            return "Новость успешно обновлена";
        else
            return "Новость не была обновлена";
    } else
        return "Запрос не был сформирован";
}

function registration($link, $login, $password)
{
    $stmt = $link->prepare(
        "SELECT * FROM users WHERE login=? and password=?"
    );
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();

    $result = $stmt->get_result();

    $myrow = mysqli_fetch_array($result);
    if ($myrow == NULL) {

        $stmt = $link->prepare("INSERT INTO users (login, password, admin) VALUES( ?, ?, ?)");

        $admin = 0;
        $stmt->bind_param("sss", $login, $password, $admin);
        $stmt->execute();

        $_SESSION['login'] = $login;
        $_SESSION['admin'] = $admin;

        header("Location: http://localhost/index.php");
    } else {
        return "Пользователь $login уже зарегистрирован";
        exit;
    }
}

function auth($link, $login, $password)
{
    $stmt = $link->prepare("SELECT * FROM users WHERE login=?");
    $stmt->bind_param("s", $login);
    $stmt->execute();

    $result = $stmt->get_result();
    $myrow = $result->fetch_assoc();

    if (empty($myrow['login'])) {

        return "Введен некорректный логин или пароль";
        exit;
    } else {

        if ($password == $myrow['password']) {

            $_SESSION['login'] = $myrow['login'];
            $_SESSION['id'] = $myrow['id'];
            $_SESSION['admin'] = $myrow['admin'];

            header("Location: http://localhost/index.php");
        } else {

            return "Введен некорректный логин или пароль";
            exit;
        }
    }
}