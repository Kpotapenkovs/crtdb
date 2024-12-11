<?php


class Database {
    public function query(){
        $dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

        $pdo = new PDO($dsn);
        
        //sagatavo vaicājumu
        $statement =  $pdo->prepare("SELECT * FROM post");

//ispildīt statement
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $data;

    }

}