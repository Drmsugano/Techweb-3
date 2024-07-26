<?php

    class Triangulo implements Figura {
        private $base;
        private $altura;
        private $lado1;
        private $lado2;
        private $lado3;
    
        public function __construct($base = 0, $altura = 0, $lado1 = 0, $lado2 = 0, $lado3 = 0) {
            $this->base = $base;
            $this->altura = $altura;
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;
        }
    
        public function setBase($base) {
            $this->base = $base;
        }
    
        public function getBase() {
            return $this->base;
        }
    
        public function setAltura($altura) {
            $this->altura = $altura;
        }
    
        public function getAltura() {
            return $this->altura;
        }
    
        public function setLados($lado1, $lado2, $lado3) {
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;
        }
    
        public function getLados() {
            return [$this->lado1, $this->lado2, $this->lado3];
        }
    
        public function calcularArea() {
            return ($this->base * $this->altura) / 2;
        }
    
        public function calcularPerimetro() {
            return $this->lado1 + $this->lado2 + $this->lado3;
        }
    }