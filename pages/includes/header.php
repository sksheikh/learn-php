<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!--Header area-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="action.php?page=home" class="navbar-brand text-uppercase">Logo</a>
        <ul class="navbar-nav">
            <li><a href="action.php?page=home" class="nav-link">Home</a></li>
            <li><a href="action.php?page=add-product" class="nav-link">Add Products</a></li>
            <li class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                <ul class="dropdown-menu">
                    <?php foreach ($category as $categories){?>
                        <li><a href="" class="dropdown-item"><?php echo $categories['name'] ?></a></li>
                    <?php } ?>
                </ul>
            </li>
        </ul>
    </div>
</nav>