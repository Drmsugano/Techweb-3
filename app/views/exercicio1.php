<?php
$triangulo = new Triangulo();
$triangulo->setLado1(1.3);
$triangulo->setLado2(1.1);
$triangulo->setLado3(1.2);
$array = $triangulo->transformArray($triangulo->getLado1(),$triangulo->getLado2(),$triangulo->getLado3());
$triangulo->calcularPerimetro($array);
