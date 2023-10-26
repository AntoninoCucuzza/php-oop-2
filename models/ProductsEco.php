<?php


class Products
{
    public $name;
    public $price;
    public $target;
    public $img = 'https://picsum.photos/200/300';


    function __construct($_name, $_price, $_target)
    {

        $this->name = $_name;
        $this->price = $_price;
        $this->target = $_target;
    }

    public function insertPrice($addedPrice)
    {

        if (!is_numeric($addedPrice)) {
            throw new InvalidArgumentException('<h1 class="bg-warning text-black"> 😠 quesato e illegale adesso caccia i numeri o mi arrabbio 😠 </h1>', 1);
        } elseif ($addedPrice > 1000) {
            throw new RangeException('<h1 class="bg-warning text-black"> troppo caro fra </h1>');
        }
        return $addedPrice;
    }
}


/* $exampleProduct = new Products('palla', 20, 'cane');


try {
    $newPrice = $exampleProduct->insertPrice('moni cash moni'); //<-- inserire un numero inferiore a 1000 qua per risolvere   
    echo $newPrice;
} catch (Exception $error) {
    echo '<div class="p-4">';
    echo $error->getMessage();
    echo '<br>';
    echo $error->getFile();
    echo '<br>';
    echo $error->getTraceAsString();
    echo '<br>';
    echo '</div>';
}


 */
class Food extends Products
{
    public $name_product;
    public $weight;
    public $rating;


    function __construct($_name, $_price, $_target, $_name_product, $_weight, $_rating)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->target = $_target;
        $this->name_product = $_name_product;
        $this->weight = $_weight;
        $this->rating = $_rating;
    }
}
class Game extends Products
{
    public $name_product;
    public $weight;
    public $rating;

    function __construct($_name, $_price, $_target, $_name_product, $_weight, $_rating)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->target = $_target;
        $this->name_product = $_name_product;
        $this->weight = $_weight;
        $this->rating = $_rating;
    }
}

class Cuccia extends Products
{
    public $name_product;
    public $weight;
    public $rating;

    function __construct($_name, $_price, $_target, $_name_product, $_weight, $_rating)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->target = $_target;
        $this->name_product = $_name_product;
        $this->weight = $_weight;
        $this->rating = $_rating;
    }
}
