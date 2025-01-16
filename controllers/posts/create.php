<?php 

$db = new database ($config["database"]);

$params = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO posts (content) VALUES ( :content );";

    $params = ["content" => $_POST["content"]];

    $posts = $db->query($sql, $params)->fetchAll();

    header("Location: /"); exit();
}



include "views/components/posts/create.view.php";