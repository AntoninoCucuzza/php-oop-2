<?php

$dog = new TypeOfPet('cane');
$cat = new TypeOfPet('gatto');

$prodotti = [
    $gatto = new Food('cibo per gatti', '€19.99', $cat, 'cibo fantastico per gatti ', '1kg', '10/10'),
    $cane = new Food('cibo per cani', '€29.99', $dog, 'cibo fantastico per cani', '1kg', '10/10'),

    $palla = new Game('palla per cani', '€39.99', $dog, 'palla fantastica per cani', '1kg', '10/10'),
    $corda = new Game('corda per cani', '€49.99', $dog, 'corda fantastica per cani', '1kg', '10/10'),

    $cuccia_gatto = new Cuccia('cuccia per gatti', '€59.99', $cat, 'cuccia fantastica per gatto', '1kg',  '10/10'),
    $cuccia_cane = new Cuccia('cuccia per cani', '€69.99', $dog, 'cuccia fantastica per cani', '1kg',  '10/10'),

    $gatto = new Game('cibo per gatti', '€19.99', $cat, 'cibo fantastico per gatti ', '1kg',  '1kg'),
    $cane = new Game('cibo per cani', '€29.99', $dog, 'cibo fantastico per cani', '1kg',  '1kg'),

    $palla = new Food('palla per cani', '€39.99', $dog, 'palla fantastica per cani', '1kg',  '10/10'),
    $corda = new Food('corda per cani', '€49.99', $dog, 'corda fantastica per cani', '1kg',  '10/10'),

    $cuccia_gatto = new Cuccia('cuccia per gatti', '€59.99', $cat, 'cuccia fantastica per gatto', '1kg',  '10/10'),
    $cuccia_cane = new Cuccia('cuccia per cani', '€69.99', $dog, 'cuccia fantastica per cani', '1kg',  '10/10'),

];
