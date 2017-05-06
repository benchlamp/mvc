<?php

//index.php

//load & initialize any global libraries
require_once "model.php";
require_once "controllers.php";


//route the request internally
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
echo $uri;

if ("/mvc/index.php" === $uri) {
    list_action();
} elseif ("/mvc/index.php/show" == $uri && isset($_GET["id"])) {
    show_action($_GET["id"]);
} else {
    //header("HTTP/1.1 404 Not Found", true, 404);
    echo "<html><body><h1>Page Not Found</h1></body></html>";
}

?>