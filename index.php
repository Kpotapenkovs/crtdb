<?php
include "Database.php";
include "functions.php";

$config = require("config.php");

$db = new database ($config["database"]);


$select = "SELECT * FROM posts";


$params = [];


if (isset($_GET["search_query"]) && $_GET["search_query"] != "" ){

    $search_query = "%" . $_GET["search_query"] . "%";

    $select .= " WHERE content LIKE :content";

    $params = ["content" => $search_query];

}

$posts = $db->query($select , $params)->fetchAll();



include "views/index.view.php";