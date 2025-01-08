<body>

    <div class="container">
        <h1>Blog Categories</h1>
        
        <form class="search-form" method="GET">
            <input type="text" name="search_query" placeholder="Search categories..." value="<?= isset($_GET['search_query']) ? $_GET['search_query'] : '' ?>" />
            <button type="submit">Search</button>
        </form>

        <?php
        $params = [];

        if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
            $search_query = "%" . $_GET["search_query"] . "%";
            $select .= " WHERE category_name LIKE :category_name";
            $params = ["category_name" => $search_query];
        }

        $posts = $db->query($select, $params)->fetchAll();

        if (count($posts) == 0) {
            echo "<div class='no-results'>No categories found.</div>";
        } else {
            echo "<ul>";
            foreach ($posts as $post) {
                echo "<li>" . htmlspecialchars($post["category_name"]) . "</li>";
            }
            echo "</ul>";
        }
        ?>

    </div>

</body>