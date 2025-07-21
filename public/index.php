<?php

use App\Developer;

require_once '../vendor/autoload.php';

$developer = new Developer('Boris', 20, [5, 6, 10]);

$developer->setPosition('developer');
var_dump($developer->getPosition());



