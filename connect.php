<?php
include "Database.php";
include "functions.php";

$config = require("config.php");

$db = new database ($config["database"]);

$post = $db->query("SELECT * FROM post")->fetchAll(PDO::FETCH_ASSOC);



//dabūt rezultātu


//dd($post[0]["content"]);
echo "<ul>";
foreach ($post as $posts){
    echo "<li>" . $posts["content"] . "</li>";
}
echo "</ul>";
