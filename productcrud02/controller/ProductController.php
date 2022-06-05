<?php

namespace app\controllers;

use app\Router;

class ProductController{
    public function index(Router $router)
    {
        echo "<h1>index page</h1>";
    }
    public function create(Router $router)
    {
        echo "<h1>create page</h1>";
    }
    public function update(Router $router)
    {
        echo "<h1>update page</h1>";
    }
    public function delete(Router $router)
    {
        echo "<h1>delete page</h1>";
    }
}

?>  