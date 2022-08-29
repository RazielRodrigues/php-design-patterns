<?php

namespace src\Classes;

use src\Interfaces\BoloInterface;
use src\Interfaces\BoloCenouraInterface;
use src\Interfaces\BoloChocolateInterface;

class Bolo implements BoloInterface
{
    public function assar()
    {
        echo 'assar';
    }
    public function misturar()
    {
        echo 'misturar';
    }
    public function servir()
    {
        echo 'servir normal';
    }
}

class BoloCenoura extends Bolo implements BoloCenouraInterface
{
    public function assar()
    {
        echo 'assar 45 minutos';
    }
    public function misturar()
    {
        echo 'misturar 10 minutos';
    }
    public function cobertura()
    {
        echo 'cobertura 10 gramas';
    }
}

class BoloChocolate extends Bolo implements BoloChocolateInterface
{
    public function assar()
    {
        echo 'assar 34 minutos';
    }
    public function misturar()
    {
        echo 'misturar 2 minutos';
    }
    public function calda()
    {
        echo 'calda 200 ml';
    }
    public function servir()
    {
        echo 'servir no prato';
    }
}