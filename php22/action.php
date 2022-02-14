<?php
require_once  'vendor/autoload.php';
use App\classes\Catagory;
use App\classes\Product;

if (isset($_GET['pages']))
{
    if ($_GET['pages']=='all-product')
    {
        $catagory = new Catagory();
        $catagories = $catagory->category();
        $product = new Product();
        $products = $product->index();

        include 'pages/allProduct.php';
    }
    elseif ($_GET['pages'] == 'categroy-products')
    {
        $catagory = new Catagory();
        $catagories = $catagory->category();
        $product = new Product();
        $products = $product->shortProducts($_GET['category_id']);
        include 'pages/allProduct.php';
    }
    elseif ($_GET['pages']== 'product-details')
    {
        $catagory = new  Catagory();
        $catagories = $catagory->category();
        $productDetails = $product->getProductDetails($Get['product_id']);
        include 'pages/productDetails.php';
    }
}