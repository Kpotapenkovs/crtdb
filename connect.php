<?php
include "Database.php";
include "functions.php";

$config = require("config.php");

$db = new database ($config["database"]);


$select = "SELECT * FROM posts";


$params = [];

echo "<h1>blog</h1>";
if (isset($_GET["search_query"]) && $_GET["search_query"] != "" ){

    $search_query = "%" . $_GET["search_query"] . "%";

    $select .= " WHERE content LIKE :content";

    $params = ["content" => $search_query];

}

$posts = $db->query($select , $params)->fetchAll();

echo "<form>";
echo  "<input name='search_query' />";
echo "<button>meklēt</button>";
echo "</form>";
//dabūt rezultātu

if (count ($posts) == 0){
    echo "not found";
}

//dd($post[0]["content"]);
echo "<ul>";
foreach ($posts as $post){
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";
