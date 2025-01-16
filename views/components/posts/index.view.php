<?php
include "views/components/header.php";
?>
<h1>blog</h1>

<div class="container">
<form class="search-form">
<input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
<button type="submit">meklēt</button>
</form>

<?php if (count ($posts) == 0){ ?>

    <P>not found</p>
    
    <?php } ?>

    <?php //dd($post[0]["content"]); ?>

    <ul>

<?php foreach ($posts as $post){ ?>
    <li>
    <a href="show?id=<?= $post["id"] ?>"><?= htmlspecialchars($post["content"]) ?></a>
    </li>

  <?php } ?>
    </ul>

</div>
</body>
</html>