<?php

class Konwerter2 {
    
    const JEDNOSTKA =['MILA'=>1.609,/*km*/
                      'JARD'=>91.44,/*cm*/
                      'STOPA'=>30.48,/*cm*/
                      'CAL'=>2.54 /*cm*/];
    
    public function __construct() {
        
    }
    public function konwerter($jednostka,$wartosc) {
        switch($jednostka){
            case 'm':
                $result = $wartosc / self::JEDNOSTKA['MILA'];
                break;
            case 'j':
                $result = ($wartosc*100) / self::JEDNOSTKA['JARD'];
                break;
            case 's':
                $result = $wartosc / self::JEDNOSTKA['STOPA'];
                break;
            case 'c':
                $result = $wartosc / self::JEDNOSTKA['CAL'];
                break;
            default :
                $result ='Nieznana jednostka';
     }
     return round($result,2);
    }
    
}

