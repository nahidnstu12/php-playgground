<?php

use app\controllers\ProductController;
use app\Router;

require_once __DIR__."./../vendor/autoload.php";

// $database = new \app\Database();

$router = new Router();

$router->get("/", [ProductController::class, "index"]);
$router->get("/products", [ProductController::class, "index"]);
$router->get("/products/index", [ProductController::class, "index"]);
$router->get("/products/create", [ProductController::class, "create"]);
$router->get("/products/create", [ProductController::class, "create"]);
$router->get("/products/update", [ProductController::class, "update"]);
$router->get("/products/update", [ProductController::class, "update"]);
$router->get("/product/delete", [ProductController::class, "delete"]);

$router->resolve();
?>