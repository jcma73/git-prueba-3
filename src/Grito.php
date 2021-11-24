<?php

class Grito {
    private $grito;

    function __construct(string $grito) {
        $this->grito = strtoupper($grito);
    }
    function gritar() {
        echo $this->grito;
    }
}
