<?php
include "views/components/header.php";
?>
<div class="container">

<h1>rediģēt bloga ierakstu</h1>
<form class="search-form" method="POST">
<label><input type = "hidden" name="id"  value = <?php $post["id"] ?> ></label>
<button type="submit">rediģēt</button>
</form>
</div>




<ul>

<?php foreach ($posts as $post){ ?>
    <li>
    <a href="show?id=<?= $post["id"] ?>"><?= htmlspecialchars($post["content"]) ?></a>
    </li>

  <?php } ?>
    </ul>