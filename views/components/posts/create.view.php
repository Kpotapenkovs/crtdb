<?php include "views/components/header.php"; ?>

<div class="container">

<h1>izveidot bloga ierakstu</h1>
<form class="search-form" method="POST">
<label><input value="<?= $_POST['content'] ?? '' ?>" name="content" /></label>
<button type="submit">izveidot</button>
</form>
</div>

<?php
if (!empty($errors)) {
    echo "<p>" . $errors["content"] . "</p>";
}
?>