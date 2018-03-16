<?php

class Wyswietl{
    
    private $app;
    


    public function __construct($class,$a,$b) {
        $app = new $class();
        $this->app = $app->konwerter($a,$b);
        
    }
    public function pokaz() {
        echo $this->app;
    }
}

