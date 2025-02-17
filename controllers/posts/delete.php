<?php

$sql = "SELECT * FROM posts WHERE id = :id";

$params = ["id" => $_GET["id"]];

$posts = $db->query($sql, $params)->fetch();
   
$sql = "DELETE FROM posts WHERE id = :id";    

$posts = $db->query($sql, $params)->fetchAll();
header("Location: /"); exit();
    
   


  





