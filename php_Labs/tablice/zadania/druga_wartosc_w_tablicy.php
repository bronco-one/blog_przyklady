<?php 

$tab =[22,12,23,4,1,77,3,8,77];
$l = count($tab);

sort($tab);

$p = 2;

for($j =0; $j< $l; $j++){
  
  if($tab[$l -1] > $tab[$l-$p]){
      echo $tab[$l-$p];
      break;
    }
  $p++;
}