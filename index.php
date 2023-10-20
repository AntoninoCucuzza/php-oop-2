<?php
$debug = true; // cambiate in true e false in base se volete o meno vedere gli errori
if ($debug == true) {
    ini_set('display_errors', 1); // imposta il file php.ini a mostrare gli errori
    error_reporting(E_ALL); // imposta il livello di errori da mostrare E_ALL tutti
}


require __DIR__ . '/models/target.php';
include __DIR__ . '/models/products.php';
include __DIR__ . '/data/db.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
</head>

<body class="bg-black text-white">
    <div class="container">
        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-3">

                    <div class="card">
                        <div class="card-header">
                            <h1><?= $prodotto->name_product; ?></h1>

                        </div>
                        <img src="<?= $prodotto->img; ?>" alt="">
                        <ul>
                            <li>name: <?= $prodotto->name; ?></li>
                            <li>Price: <?= $prodotto->price; ?></li>
                            <li>target: <?= $targetAnimal = ($prodotto->target->animal === 'gatto') ? '🐱' : '🐶';
                                        $targetAnimal; ?></li>
                            <li>name_product: <?= $prodotto->name_product; ?></li>
                            <li>weight: <?= $prodotto->weight; ?></li>

                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>





    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>
</body>

</html>