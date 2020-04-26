<?php 

$tab =['nabiał'=>[
	'masło'=>['łaciate','solone','szwedzkie'],
	'mleko'=>['wiejskie', 'łaciate','końskie'],
	'ser'=>['biały','tłusty','półtłusty']
	]
];

foreach($tab as $nab =>$value) {
       
	foreach($value as $nazwa => $gat ) {
		print $nazwa.'<br/>';
		foreach($gat as $k1 =>$k) {
			print $k."<br/>";
		}
		
		echo '<br/>';
	}
	
}

