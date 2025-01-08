
<h1>blog</h1>

<form>
<input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>'/>
<button>meklēt</button>
</form>

<?php if (count ($posts) == 0){ ?>

    <P>not found</p>
    
    <?php } ?>

    <?php //dd($post[0]["content"]); ?>

    <ul>

<?php foreach ($posts as $post){ ?>
    <li>
      <?= $post["content"] ?>
    </li>

  <?php } ?>

</ul>