<?php

namespace app;


class Router{
    public array $getRoutes = [];
    public array $postRoutes = [];
    public ?Database $db = null;

    // public function __construct(Database $db) {
    //     $this->db = $db;
    // }
    
    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }
    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }
    public function resolve()
    
    {
         echo '<pre>'; 
        var_dump($_SERVER['PATH_INFO']);
        exit;
        echo '<pre>'; 
        $url = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'] ?? "get";

        if ($method === 'get') {
            $fn = $this->getRoutes[$url] ?? null;
        } else {
            $fn = $this->postRoutes[$url] ?? null;
        }
        if (!$fn) {
            echo 'Page not found';
            exit;
        }
        echo call_user_func($fn, $this);
    }
    
}
