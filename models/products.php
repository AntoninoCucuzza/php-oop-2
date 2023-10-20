<?php

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
