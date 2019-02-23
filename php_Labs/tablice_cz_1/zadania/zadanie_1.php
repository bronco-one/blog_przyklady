<?php 
// zadanie nr 1;

$tab = array(
	      array(
		      array('Ola','Jacek','Staś'),
		      array('Józek','Stefan','Adam')
	)
);

foreach($tab as $t) {
	foreach($t as $k) {
		foreach($k as $val) {
			echo $val.'<br/>';
		}		
	}		
}
