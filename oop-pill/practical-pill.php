<?php

class Vehicle implements iVehicle{
    public $motor;
    public $volante;
    public $ruedas;
    public $velocimetro;

    public function __construct(){
        echo "Building a vehicle";
    }

    public function __destruct(){
        echo "Destroying vehicle";
    }

    public function setMotor($motor){
        return $this->motor = $motor;
    }

    public function setVolante($volante){
        return $this->volante = $volante;
    }

    public function setRuedas($ruedas){
        return $this->ruedas = $ruedas;
    }

    public function acelerar()
    {
        return $this->velocimetro++;
    }

    public function frenar()
    {
        return $this->velocimetro--;
    }
}

$coche = new Vehicle;
$coche->setMotor(124);
var_dump($coche);


class Camion extends Vehicle{

    static $remolque;

    public function getRemolque(){
        echo "Enganchando el remolque";
    }
}

$trailer = new Camion;
$trailer->getRemolque();
var_dump($trailer);

abstract class Tanque extends Vehicle{
    
    private $cañon;
    private $cabeza;

    private function disparar(){
        echo "Disparandooo";
    }

    private function girarCabeza(){
        echo "girando cabezal";
    }
}

interface iVehicle{

    public function acelerar();
    public function frenar();

}
