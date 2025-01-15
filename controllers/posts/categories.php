<?php



$select = "SELECT * FROM categories";

$params = [];

if (isset($_GET["search_query"]) && $_GET["search_query"] != "" ){

    $search_query = "%" . $_GET["search_query"] . "%";

    $select .= " WHERE category_name LIKE :category_name";

    $params = ["category_name" => $search_query];

}


$posts = $db->query($select , $params)->fetchAll();

include "views/categories.view.php";
?>

