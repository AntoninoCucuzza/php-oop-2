<?php
/* $debug = true; // cambiate in true e false in base se volete o meno vedere gli errori
if ($debug == true) {
    ini_set('display_errors', 1); // imposta il file php.ini a mostrare gli errori
    error_reporting(E_ALL); // imposta il livello di errori da mostrare E_ALL tutti
} */

class target
{
    public $animal;

    function __construct($_animal)
    {
        $this->animal = $_animal;
    }
}

$dog_target = new target('cane');
$cat_target = new target('gatto');

class products
{

    public $name;
    public $price;
    public $target;
    public $img = 'https://picsum.photos/200/300';


    function __construct($_name, $_price, $_target,)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->target = $_target;
    }
}

class food extends products
{
    public $name_product;
    public $weight;


    function __construct($_name, $_price, $_target, $_name_product, $_weight)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->target = $_target;
        $this->name_product = $_name_product;
        $this->weight = $_weight;
    }
}
class game extends products
{
    public $name_product;
    public $rating;

    function __construct($_name, $_price, $_target, $_name_product, $_rating)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->target = $_target;
        $this->name_product = $_name_product;
        $this->rating = $_rating;
    }
}

class cuccia extends products
{
    public $name_product;
    public $rating;

    function __construct($_name, $_price, $_target, $_name_product, $_rating)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->target = $_target;
        $this->name_product = $_name_product;
        $this->rating = $_rating;
    }
}
$prodotti = [
    $gatto = new food('cibo per gatti', '€19.99', $cat_target, 'cibo fantastico per gatti ', '1kg'),
    $cane = new food('cibo per cani', '€29.99', $dog_target, 'cibo fantastico per cani', '1kg'),

    $palla = new food('palla per cani', '€39.99', $dog_target, 'palla fantastica per cani', '10/10'),
    $corda = new food('corda per cani', '€49.99', $dog_target, 'corda fantastica per cani', '10/10'),

    $cuccia_gatto = new food('cuccia per gatti', '€59.99', $cat_target, 'cuccia fantastica per gatto', '10/10'),
    $cuccia_cane = new food('cuccia per cani', '€69.99', $dog_target, 'cuccia fantastica per cani', '10/10'),

];

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