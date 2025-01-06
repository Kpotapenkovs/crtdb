<?php
include "Database.php";
include "functions.php";

$config = require("config.php");

$db = new database ($config["database"]);

$posts = $db->query("SELECT * FROM post")->fetchAll(PDO::FETCH_ASSOC);





echo "<h1>blog</h1>";
if (isset($_GET["search_query"])&& $_GET["search_query"] !=""){

    echo "atgriezt ierakstus";

$posts = $db->query("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';")->fetchAll();

}
echo "<form>";
echo  "<input name='search_query' />";
echo "<button>meklēt</button>";
echo "</form>";
//dabūt rezultātu


//dd($post[0]["content"]);
echo "<ul>";
foreach ($posts as $post){
    echo "<li>" . $post["content"] . "</li>";
}
echo "</ul>";
