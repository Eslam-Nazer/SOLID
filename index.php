<?php

use App\Solid\LSP\Rectangle;

require_once "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$rectangle = new Rectangle();
$rectangle->setWidth(4);
$rectangle->setHeight(6);
echo $rectangle->calculateArea();
