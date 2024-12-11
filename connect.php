<?php

include "Database.php";

$db = new database ();
$post = $db->query();



//dabūt rezultātu


//dd($post[0]["content"]);
echo "<ul>";
foreach ($post as $posts){
    echo "<li>" . $posts["content"] . "</li>";
}
echo "</ul>";
