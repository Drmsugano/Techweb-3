<?php
require "Quadrado.php";
require "Triangulo.php";
require "Circulo.php";
class Desenhador
{
    private $figuras = [];

    public function criarQuadrado($lado)
    {
        $this->figuras[] = new Quadrado($lado);
    }

    public function criarCirculo($raio)
    {
        $this->figuras[] = new Circulo($raio);
    }

    public function criarTriangulo($base, $altura, $lado1, $lado2, $lado3)
    {
        $this->figuras[] = new Triangulo($base, $altura, $lado1, $lado2, $lado3);
    }

    public function criarRetangulo($largura, $altura)
    {
        $this->figuras[] = new Retangulo($largura, $altura);
    }

    public function calculaArea()
    {
        foreach ($this->figuras as $figura) {
            echo get_class($figura) . " - Área: " . $figura->calcularArea() . "\n";
        }
    }

    public function calculaPerimetro()
    {
        foreach ($this->figuras as $figura) {
            echo get_class($figura) . " - Perímetro: " . $figura->calcularPerimetro() . "\n";
        }
    }
}