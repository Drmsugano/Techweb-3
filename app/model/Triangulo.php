<?php
    class Triangulo implements interfaceFigura{
        private $lado1;
        private $lado2;
        private $lado3;
        private $area;
        private $base;
        private $altura;
        public function setAltura($altura){
            $this->altura = $altura;
        }
        public function setBase($base){
            $this->base = $base;
        }
        public function setLado1($lado1){
            $this->lado1 = $lado1;
        }
        public function setLado2($lado2){
            $this->lado2 = $lado2;
        }
        public function setLado3($lado3){
            $this->lado3 = $lado3;
        }
        public function getLado1(){
            return $this->lado1;
        }
        public function getLado2(){
            return $this->lado2;
        }
        public function getLado3(){
            return $this->lado3;
        }
        public function getAltura(){
            return $this->altura;
        }
        public function getBase(){
            return $this->base;
        }
        public function transformArray ($lado1,$lado2,$lado3){
            $array = array(3);
            $array[0] = $lado1;
            $array[1] = $lado2;
            $array[2] = $lado3;
            return $array;
        }
        function calcularPerimetro($array){
            for ($i = 0 ; $i < 3; $i++){
            $perimetro += $array[$i];
            }
            echo ("Parametro do Triangulo é $perimetro");
        }
        function calcularArea(){
            
        }
    }