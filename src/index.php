<?php

session_start();

/**
 * SINGLE = OK
 * OPEN = OK
 * LISKOV = OK
 * INTERFACE = OK
 * DEPENDENCY = OK
 */
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


if ($_POST['opcao']) {

    //OPEN CLOSED
    $class = new $_POST['opcao']();
    $class->assar();
    $class->misturar();
    $class->servir();

    echo "<hr>";

    //LISKOV
    $class2 = new BoloCenoura();
    $class->servir();
}


//DEPENDENCY
interface SobremesaInterface
{
    public function serDoce();
}


class TortaHolandesa implements SobremesaInterface
{
    public function serDoce()
    {
        echo '70% doce';
    }
}

class TortaLimao implements SobremesaInterface
{
    public function serDoce()
    {
        echo '40% doce';
    }
}

class EntregaSobremesa
{
    private $sobremesa;

    //Respeitando SOLID
    public function __construct(SobremesaInterface $sobremesa)
    {
        $this->sobremesa = $sobremesa;
    }
    
    // quebrando Single, open closed e inversao de dependencia
    // public function __construct($sobremesa)
    // {
    //     if($sobremesa instanceof TortaLimao){
    //         echo 'torta limao';
    //     }
    // }

    /**
     * Get the value of sobremesa
     */
    public function getSobremesa()
    {
        var_dump($this->sobremesa);
    }
}

$torta = new TortaLimao(); //
$torta2 = new TortaHolandesa();
$torta3 = new TortaHolandesa();
$torta4 = new TortaHolandesa();
$entrega = new EntregaSobremesa($torta); //
$entrega->getSobremesa()


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FABRICA DE BOLOS SOLID PHP</title>
</head>

<body>
    <h1>ESCOLHA SEU BOLO</h1>
    <form method="post">
        <select name="opcao">
            <option value="BoloCenoura">Bolo cenoura</option>
            <option value="BoloChocolate">Bolo cholocate</option>
        </select>
        <button type="submit">ESCOLHER</button>
    </form>
</body>

</html>