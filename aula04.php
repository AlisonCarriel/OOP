<?php

    class Retangulo{
        private $altura;
        private $largura;

        function __set($name, $value)
        {
            $this->$name = $value;
        }

        function __get($name)
        {
            return $this->$name;
        }

        public function getArea(){
            return $this->altura * $this->largura;
        }

        public function getPerimetro(){
            return 2* ($this->altura + $this->largura);
        }


    }

    //objeto
    $retangulo01 = new Retangulo();
    $retangulo01->altura=5;
    $retangulo01->largura=2;
    echo ("altra {$retangulo01->altura} <br>");
    echo ("altra {$retangulo01->largura} <br>");

    echo "Area {$retangulo01->getArea()} <br>";
    echo "Area {$retangulo01->getPerimetro()} <br>";