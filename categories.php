<?php

include "config.php";
include "Database.php";
include "views/components/navbar.php";

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
    <link rel="stylesheet" href="css/styles2.css">
    
</head>
<?php include "views/categories.view.php" ?>
</html>
