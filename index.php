<?php

$debug = true; // cambiate in true e false in base se volete o meno vedere gli errori
if ($debug == true) {
    ini_set('display_errors', 1); // imposta il file php.ini a mostrare gli errori
    error_reporting(E_ALL); // imposta il livello di errori da mostrare E_ALL tutti
}


require __DIR__ . '/models/TypeOfPet.php';
include __DIR__ . '/models/ProductsEco.php';
include __DIR__ . '/data/Data.php';




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
    <style>
        pre {
            color: white;
        }
    </style>
</head>

<body class="bg-dark text-white">
    <?php include __DIR__ . '/partials/Header-Partial.php' ?>

    <div class="p-5 mb-4 bg-secondary ">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Custom jumbotron</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
            <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-4 g-3 ">

                    <div class="card h-100">
                        <div class="card-header">
                            <h1><?= $prodotto->name_product; ?></h1>

                        </div>
                        <img class="img-fluid" src="<?= $prodotto->img; ?>" alt="">
                        <ul>
                            <li>name: <?= $prodotto->name; ?></li>
                            <li>Price: <?= $prodotto->price; ?></li>
                            <li>target: <?= $targetAnimal = ($prodotto->target->animal === 'gatto') ? '🐱' : '🐶';
                                        $targetAnimal; ?></li>
                            <li>name_product: <?= $prodotto->name_product; ?></li>
                            <li>weight: <?= $prodotto->weight; ?></li>
                            <li>rating: <?= $prodotto->rating; ?></li>


                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include __DIR__ . '/partials/Footer-Partial.php' ?>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
</body>

</html>