<?php include "views/components/header.php"; ?>
<h1><?= htmlspecialchars($post["content"]) ?></h1>
<input type="hidden" value="<?=$post["id"]?>">
<input type="button" value="rediģēt" onclick='window.location.href="edit?id=<?= $_GET["id"] ?>"'>
<form method="POST">
<input type="button" value="dzēst" onclick='window.location.href="delete?id=<?= $_GET["id"] ?>"'>
</form>