<?php 

require 'Exemplo.php';

$ex1 = new Exemplo();
$ex2 = new Exemplo();

Exemplo::$sexo = 'MASCULINO';

echo Exemplo::$sexo;

echo PHP_EOL;

Exemplo::$sexo = 'FEMININO';

echo Exemplo::$sexo;

echo PHP_EOL;
