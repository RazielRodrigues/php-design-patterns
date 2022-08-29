<?php

namespace src\Interfaces;

interface EntregaInterface
{
    public function localizacao();
    public function status();
}

interface EntregaMotoInterface extends EntregaInterface
{
    public function minutos();
}

interface EntregaCarroInterface extends EntregaInterface
{
    public function horas();
}