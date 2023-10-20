<?php

$dog_target = new target('cane');
$cat_target = new target('gatto');

$prodotti = [
    $gatto = new food('cibo per gatti', '€19.99', $cat_target, 'cibo fantastico per gatti ', '1kg'),
    $cane = new food('cibo per cani', '€29.99', $dog_target, 'cibo fantastico per cani', '1kg'),

    $palla = new food('palla per cani', '€39.99', $dog_target, 'palla fantastica per cani', '10/10'),
    $corda = new food('corda per cani', '€49.99', $dog_target, 'corda fantastica per cani', '10/10'),

    $cuccia_gatto = new food('cuccia per gatti', '€59.99', $cat_target, 'cuccia fantastica per gatto', '10/10'),
    $cuccia_cane = new food('cuccia per cani', '€69.99', $dog_target, 'cuccia fantastica per cani', '10/10'),

    $gatto = new food('cibo per gatti', '€19.99', $cat_target, 'cibo fantastico per gatti ', '1kg'),
    $cane = new food('cibo per cani', '€29.99', $dog_target, 'cibo fantastico per cani', '1kg'),

    $palla = new food('palla per cani', '€39.99', $dog_target, 'palla fantastica per cani', '10/10'),
    $corda = new food('corda per cani', '€49.99', $dog_target, 'corda fantastica per cani', '10/10'),

    $cuccia_gatto = new food('cuccia per gatti', '€59.99', $cat_target, 'cuccia fantastica per gatto', '10/10'),
    $cuccia_cane = new food('cuccia per cani', '€69.99', $dog_target, 'cuccia fantastica per cani', '10/10'),

];
