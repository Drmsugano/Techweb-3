<?php

class Retangulo implements Figura
{
    protected $largura;
    protected $altura;

    public function __construct($largura = 0, $altura = 0)
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function setLargura($largura)
    {
        $this->largura = $largura;
    }

    public function getLargura()
    {
        return $this->largura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function calcularArea(): float
    {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro(): float
    {
        return 2 * ($this->largura + $this->altura);
    }
}