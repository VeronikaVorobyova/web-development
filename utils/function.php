<?php

function request($link, string $req)
{
    $result = $link->query($req);
    return $result;
}

function countNews($link)
{
    $obj = request($link, "SELECT COUNT(*) AS count FROM news");
    $res = $obj->fetch_assoc();
    $count = $res['count'];
    return $count;
}

function showAllNews($link)
{
    $result = request($link, "SELECT * FROM news");
    return $result;
}

function addNews($link, $title, $preview, $full_text, $pic)
{
    if ($stmt = $link->prepare("INSERT INTO news(title, preview, full_text, pic)VALUES (:title, :preview, :full_text, :pic)")) {
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':preview', $preview);
        $stmt->bindParam(':full_text', $full_text);
        $stmt->bindParam(':pic', $pic);

        if ($stmt->execute()) {
            return "Новость добавлена успешно";
        } else {
            return "Новость не была добавлена";
        }
    } else {
        return "Что-то пошло не так";
    }
}
