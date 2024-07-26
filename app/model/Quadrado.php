<?php
include "Retangulo.php";
class Quadrado extends Retangulo
{
    public function __construct($lado = 0)
    {
        parent::__construct($lado, $lado);
    }

    public function setLado($lado)
    {
        $this->largura = $lado;
        $this->altura = $lado;
    }

    public function getLado()
    {
        return $this->largura; // Largura e altura são iguais
    }

    public function calcularArea(): float
    {
        return $this->largura ** 2;
    }

    public function calcularPerimetro(): float
    {
        return 4 * $this->largura;
    }
}
