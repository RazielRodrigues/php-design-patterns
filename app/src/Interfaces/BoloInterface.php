<?php

namespace src\Interfaces;

interface BoloInterface
{
    public function assar();
    public function misturar();
}

interface BoloCenouraInterface extends BoloInterface
{
    public function cobertura();
}

interface BoloChocolateInterface extends BoloInterface
{
    public function calda();
}