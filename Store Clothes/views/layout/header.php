<?php require_once 'helpers/utils.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=url?>assets/css/styles.css">
    <title>T-Shirt Shop</title>
</head>
<body>
    <header class="header" id="header">
        <div id="logo">
            <img src="<?=url?>assets/img/camiseta.png" alt="camiseta_logo">
            <a href="index.php">T-Shirt Shop</a>
        </div>
    </header>

    <?php $categories = Utils::showCategory(); ?>
    <nav id="menu">
        <ul>
            <li>
                <a href="index.php">Inicio</a>
            </li>

            <?php foreach($categories as $category) : ?>
                <li>
                    <a href="index.php?controller=product&action=index&category=<?=$category['id']?>"><?=$category['nombre']?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <div id="content">
