<?php

 class Carro{

    var $ruedas;

    function Carro(){
        $this->ruedas = 4;
    }

    function MostrarInfo(){
        echo "Este vehiculo tiene: " . $this->ruedas;
    }
}


class Camion{

    var $ruedas;

    function Camion(){
        $this->ruedas = 8;
    }

    function MostrarInfo(){
        echo "Este vehiculo tiene: " . $this->ruedas;
    }
}




?>