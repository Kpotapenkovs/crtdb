<?php
include "Validator.php";

$sql = "SELECT * FROM posts WHERE id = :id";
    $params = ["id" => $_GET["id"]];
$posts = $db->query($sql, $params)->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];



    $sql = "UPDATE posts SET content = :content WHERE id = :id";
    $params = ["content" => $_POST["content"], "id" => $_GET["id"]];
    
    $kluda = $_POST["content"];

    if (!Validator::string($_POST["content"], max: 50)){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    } else {
        $posts = $db->query($sql, $params)->fetchAll();
        header("Location: /"); exit();
    }
}

include "views/components/posts/edit.view.php";