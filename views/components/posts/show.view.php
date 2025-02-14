<?php include "views/components/header.php"; ?>
<h1><?= htmlspecialchars($post["content"]) ?></h1>
<a href="edit?id=<?= $_GET["id"] ?>">rediģēt</a>

