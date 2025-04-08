<?php

require_once __DIR__ . "/../vendor/autoload.php";

use app\core\Application;

$app = new Application();

$app->router->get("/", 'home');

$app->router->get("/contact", 'contact');
$app->router->post("/contact", function () {
    return "Handling contact form submission";
});

$app->run();
