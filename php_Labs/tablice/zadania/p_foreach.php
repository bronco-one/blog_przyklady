<?php
$tab =['Imię'=>'Jan','Nazwisko'=>'Nowak','Wiek'=>'23',
                      'PESEL'=>'84010377499'];

foreach($tab as $t=>$v){
	echo $t.': '.$v.'<br/>';
}