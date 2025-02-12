<?php



$sql = "SELECT * FROM posts WHERE id = :id";
    $params = ["id" => $_GET["id"]];
$posts = $db->query($sql, $params)->fetch();



include "views/components/posts/edit.view.php";