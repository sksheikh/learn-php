<?php
include_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Categories;
use App\classes\Products;


$categories = new Categories();
$category = $categories->getAllCategory();

if(isset($_GET['page']))
{
    if($_GET['page']=='home')
    {
        include 'pages/home.php';
    }elseif ($_GET['page']=='add-product')
    {
        include 'pages/add-product.php';
    }
}elseif (isset($_POST['btn']))
{
    if($_POST['btn']=='Add product')
    {
        $products = new Products($_POST,$_FILES);
        $product = $products->saveAllProducts();
        include "pages/add-product.php";

    }
}