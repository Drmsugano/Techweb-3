<?php

class Circulo implements Figura
{
    private $raio;

    public function __construct($raio = 0)
    {
        $this->raio = $raio;
    }

    public function setRaio($raio)
    {
        $this->raio = $raio;
    }

    public function getRaio()
    {
        return $this->raio;
    }

    public function calcularArea(): float
    {
        return pi() * $this->raio ** 2;
    }

    public function calcularPerimetro(): float
    {
        return 2 * pi() * $this->raio;
    }
}