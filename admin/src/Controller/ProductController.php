<?php

namespace App\Controller;
use App\Model\ProductManager;
use App\Model\Product;

class ProductController {
    protected $productController;

    public function __construct()
    {
        $this->productController = new ProductManager();
    }

    public function getAllProduct() {
        $products = $this->productController->getAllProduct();
        include('src/View/list.php');
    }
    
    public function addProduct() {
       
        include('src/View/add.php');
        if(isset($_POST['sbm'])) {
            $name = $_POST['product-name'];
            $price = $_POST['product-price'];

            $product = new Product($name, $price);
            $this->productController->addProduct($product);
            header("location:index.php");
        }
    }
    public function editProduct()
    {
        $id = $_GET['id'];
        $product = $this->productController->getProductId($id);
        include('src/View/edit.php');
        if(isset($_POST['sbm'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            echo $name;
            echo $price;
            $product = new Product($name, $price);
            $product->setId($id);
            $this->productController->editProduct($product);
            header("location:index.php");
        }
    }
}

