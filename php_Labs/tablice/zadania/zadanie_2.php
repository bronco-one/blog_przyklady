<?php 

$tab =['Nabiał'=>[
	'masło'=>['łaciate','solone','szwedzkie'],
	'mleko'=>['wiejskie', 'łaciate','końskie'],
	'ser'=>['biały','tłusty','półtłusty']
	]
];

foreach($tab as $nab =>$value) {
       print $nab.'<br/><br/>';
	foreach($value as $nazwa => $gat ) {
		print '<b>'.$nazwa.'</b><br/>';
		foreach($gat as $k1 =>$k) {
			print $k."<br/>";
		}
		
		echo '<br/>';
	}
	
}

