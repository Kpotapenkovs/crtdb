<?php



function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    exit();
}

function redirectIfNotFound($location = "/") {
    http_response_code(404);
    header("location: $location", 302);
    exit();
}

?>