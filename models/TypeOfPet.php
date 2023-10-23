<?php
require __DIR__ . '/../trait/DogSound.php';
require __DIR__ . '/../trait/CatSound.php';

class TypeOfPet
{
    use DogSound;
    use CatSound;
    public $animal;


    function __construct($_animal)
    {

        $this->animal = $_animal;
    }
}
