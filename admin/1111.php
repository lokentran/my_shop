<?php
session_start();
use App\Controller\BillController;
use App\Controller\CartController;
use App\Controller\CategoryController;
use App\Controller\CustomerController;
use App\Controller\DetailController;
use App\Controller\ProductController;

require __DIR__ . "/vendor/autoload.php";
$products = new ProductController();
$customers = new CustomerController();
$bills = new BillController();
$categories = new CategoryController();
$carts = new CartController();
$details = new DetailController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";


// if (isset($_SESSION['username'])  && $_SESSION['password']){
//     include_once('admin.php');
// }else{
//     include_once('src/View/login.php');
// }

