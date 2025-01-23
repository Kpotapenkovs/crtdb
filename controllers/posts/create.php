<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    $sql = "INSERT INTO posts (content) VALUES ( :content );";
    $params = ["content" => $_POST["content"]];

    if (!isset($_POST["content"]) || strlen($_POST["content"]) == 0 || strlen($_POST["content"]) > 50){
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    } else {
        $posts = $db->query($sql, $params)->fetchAll();
        header("Location: /"); exit();
    }
}



include "views/components/posts/create.view.php";