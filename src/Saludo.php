<?php

class Saludo {
    private $saludo;

    function __construct($name) {
        $this->saludo = "Hola $name";
    }

    function saludar() {
        echo $this->saludo;
    }
}
