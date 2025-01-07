<?php

include "config.php";
include "Database.php";

$config = require("config.php");

$db = new database ($config["database"]);


$select = "SELECT * FROM categories";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Categories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ccffe9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            padding: 20px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .search-form {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .search-form input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 2px solid #3498db;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-form button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .search-form button:hover {
            background-color: #2980b9;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            background-color: #ecf0f1;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            font-size: 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        ul li:hover {
            background-color: #dfe6e9;
        }

        .no-results {
            text-align: center;
            font-size: 20px;
            color: #e74c3c;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Blog Categories</h1>
        
        <form class="search-form" method="GET">
            <input type="text" name="search_query" placeholder="Search categories..." value="<?= isset($_GET['search_query']) ? $_GET['search_query'] : '' ?>" />
            <button type="submit">Search</button>
        </form>

        <?php
        $params = [];

        if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
            $search_query = "%" . $_GET["search_query"] . "%";
            $select .= " WHERE category_name LIKE :category_name";
            $params = ["category_name" => $search_query];
        }

        $posts = $db->query($select, $params)->fetchAll();

        if (count($posts) == 0) {
            echo "<div class='no-results'>No categories found.</div>";
        } else {
            echo "<ul>";
            foreach ($posts as $post) {
                echo "<li>" . htmlspecialchars($post["category_name"]) . "</li>";
            }
            echo "</ul>";
        }
        ?>

    </div>

</body>
</html>
