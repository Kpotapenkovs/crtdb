<?php
include "Database.php";
include "functions.php";
include "views/components/navbar.php";

$config = require("config.php");

$db = new database ($config["database"]);


include "router.php";