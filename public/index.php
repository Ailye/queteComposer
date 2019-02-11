<?php

use App\Wcs\Hello;
use HelloWorld\SayHello;

$loader = require '../vendor/autoload.php';

$hello = new hello();
$sayhello = new SayHello();

$hello->talk();



?>