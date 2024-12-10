<?php
include "functions.php";

$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";


$pdo = new PDO($dsn);

//sagatavo vaicājumu
$statement =  $pdo->prepare("SELECT * FROM post");

//ispildīt statement
$statement->execute();

//dabūt rezultātu
$post = $statement->fetchAll(PDO::FETCH_ASSOC);

//dd($post[0]["content"]);
echo "<ul>";
foreach ($post as $post){
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";
