<?php

class Adios {
    private $despedida;

    function __construct($name) {
        $this->despedida = "Adios $name";
    }

    function despidir() {
        echo $this->despedida;
    }
}
