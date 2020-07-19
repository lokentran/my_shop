<?php
    session_start();  

    require __DIR__ . '/vendor/autoload.php';

    use App\Controller\ProductController;
    
    $controller = new ProductController();

    if(isset($_SESSION["username"]) && isset($_SESSION["password"])) {
        include_once('admin.php');
    } else {
        include_once('src/View/login.php');
    }



