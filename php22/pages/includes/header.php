<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">Logo</a>
        <ul class="navbar-nav ml-auto">
<!--            <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Series01</a></li>-->
<!--            <li class="nav-item"><a href="?pages=series" class="nav-link">Series02</a></li>-->
<!--            <li class="nav-item"><a href="action.php?pages=all-product" class="nav-link">All product</a></li>-->
<!--            <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Calculator</a></li>-->
<!--            <li class="nav-item"><a href="action.php?pages=ODD" class="nav-link">ODD EVEN</a></li>-->
<!--            <li class="nav-item"><a href="action.php?pages=prime" class="nav-link">Prime Number</a></li>-->
            <li class="nav-item"><a href="action.php?pages=all-product" class="nav-link">All Products</a></li>
            <?php foreach ($catagories as $category){ ?>
            <li class="nav-item"><a href="action.php?pages=categroy-products&&category_id=<?php echo $category['id']; ?>" class="nav-link"><?php echo $category['name'] ?></a></li>
            <?php } ?>

        </ul>
    </div>
</nav>