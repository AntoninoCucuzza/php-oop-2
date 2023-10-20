<?php

class products
{

    public $name; /* *** */
    public $category; /* giochi cibo cucce  */
    public $price; /* 12 */
    public $target; /* cani gatti */

    function __construct($_name, $_category, $_price, $_target)
    {
        $this->name = $_name;
        $this->category = $_category;
        $this->price = $_price;
        $this->target = $_target;
    }
}
$cane = new products('cibo cane', 'cibo', 123, 'cane');
var_dump($cane);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>

</body>

</html>