<?php

namespace src\class;

use src\Interfaces\BoloInterface;
use src\Interfaces\EntregaInterface;

class Entrega
{
    private EntregaInterface $tipoEntrega;
    private BoloInterface $bolo;

    public function __construct(EntregaInterface $tipoEntrega, BoloInterface $bolo)
    {
        $this->tipoEntrega = $tipoEntrega;
        $this->bolo = $bolo;
    }

    public function entregar()
    {
        return [
            $this->tipoEntrega,
            $this->bolo
        ];
    }

}