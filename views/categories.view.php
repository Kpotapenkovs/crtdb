<?php
include "components/header.php";
?>

<body>

    <div class="container">
        <h1>Blog Categories</h1>
        
        <form class="search-form" method="GET">
            <input type="text" name="search_query" placeholder="Search categories..." value="<?= isset($_GET['search_query']) ? $_GET['search_query'] : '' ?>"/>
            <button type="submit">Search</button>
        </form>

        <?php
        

        if (count($posts) == 0) {
            echo "<div class='no-results'>No categories found.</div>";
        } else {
            echo "<ul>";
            foreach ($posts as $post) {
                echo "<li>" . $post["category_name"] . "</li>";
            }
            echo "</ul>";
        }

        

        ?>

    </div>

</body>