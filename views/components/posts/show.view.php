<?php include "views/components/header.php"; ?>

<h1><?= htmlspecialchars($post["content"]) ?></h1>

<input type="button" value="rediģēt" onclick='window.location.href="edit?id=<?= $_GET["id"] ?>"'>

<form method="POST" action="/delete">
    <input type="hidden" name = "id" value="<?= $_GET["id"] ?>">
    <input type="submit" value="dzēst">
</form>