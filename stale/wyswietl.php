<?php

class Wyswietl{
    
    private $app;


    public function __construct($class,$a,$b) {
        $this->app = new $class();
        $this->app->konwerter($a,$b);
        return $this;
    }
    public function pokaz() {
        echo $this->app;
    }
}

