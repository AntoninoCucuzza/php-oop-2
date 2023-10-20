<?php

class Products
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
