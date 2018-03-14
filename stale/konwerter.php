<?php

//użycie stałej w klasie przy pomocy słowa kluczowego const;

class Konwerter{
    
    const JEDNOSTKA =['MILA'=>1.609,/*km*/
                      'JARD'=>91.44,/*cm*/
                      'STOPA'=>30.48,/*cm*/
                      'CAL'=>2.54 /*cm*/];
                  
    public function __construct() {
                      
    }
    public function kmNaMile($km) {
        $result = $km / self::JEDNOSTKA['MILA'];
        return round($result,2);
    }
    public function mNaJardy($m) {
        $result = ($m*100) / self::JEDNOSTKA['JARD'];
        return round($result,2);
    }
    public function cmNaStopy($cm) {
        $result = $cm / self::JEDNOSTKA['STOPA'];
        return round($result,2);
    }
    public function cmNaCale($cm) {
        $result = $cm / self::JEDNOSTKA['CAL'];
        return round($result,2);
    }
                  
}
//sprawdzenie
$mil = new Konwerter();
echo $mil->kmNaMile(5.4);
