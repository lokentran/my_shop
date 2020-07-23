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
// $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    
    <?php 
    
    if (isset($_SESSION['username'])  && $_SESSION['password']){
        include 'src/View/menu/navbar.php';
        if(isset($_GET['page']))  {
            switch ($_GET['page']) {
                case "list-category":
                    $categories->getAllCategories();
                    break;
                case 'add-category':
                    $categories->addCategory();
                    break;
                case "list-product":
                    $products->getAllProduct();
                    break;
                case "add-product":
                    $products->addProduct();
                    break;
                case "update-product":
                    $products->updateProduct();
                    break;
                case "delete-product":
                    $products->deleteProduct();
                    break;
                case "search-product":
                    $products->searchProduct();
                    break;
                case "return-product":
                    $products->returnView();
                    break;
                case "list-customer":
                    $customers->getAllCustomer();
                    break;
                case "add-customer":
                    $customers->addCustomer();
                    break;
                case "update-customer":
                    $customers->updateCustomer();
                    break;
                case "delete-customer":
                    $customers->deleteCustomer();
                    break;
                case 'search-customer':
                    $customers->searchCustomer();
                    break;
                case "list-bill":
                    $bills->getAllBill();
                    break;
                case 'bill-detail':
                    $bills->getBillDetail();
                    break;
                case "login":
                    include('src/View/login.php');
                    break;
                case 'update-category':
                    $categories->updateCategory();
                    break;
                case 'delete-category':
                    $categories->deleteCategory();
                    break;
                case 'search-category':
                    $categories->searchCategory();
                    break;
                case 'logout':
                    include('src/View/logout.php');
                    break;
                case 'list-cart':
                    $carts->addToCart();
                    break;
                case 'form-confirm':
                    $carts->payment();
                    break;
                default:
                    $products->getAllProduct();
            }
           } else {
                $products->getAllProduct();
           }
        
    }else{
        include_once('src/View/login.php');
    }
    


 ?>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</html>
