<?php


$sql = "SELECT * FROM posts WHERE id = :id";

$params = ["id" => $_POST["id"]];

$post = $db->query($sql, $params)->fetch();

if (!isset($_POST["id"])){
    redirectIfNotFound();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$sql = "DELETE FROM posts WHERE id = :id";    
$params = ["id" => $_POST["id"]];
$post = $db->query($sql, $params)->fetchAll();
header("Location: /"); exit();
    
}
