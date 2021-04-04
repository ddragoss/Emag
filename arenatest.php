<?php

//test the arena 
require_once 'vendor/autoload.php';

$arena =  new \src\actions\Arena();
$arena->setNumberFights(1);
$arena->getBattles($arena->getNumberFights());

