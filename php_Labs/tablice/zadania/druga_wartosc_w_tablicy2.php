<?php

$tab =[22,12,23,4,1,77,3,8,77,77];
$l = count($tab);

rsort($tab);

$p = 1;

for($j=0; $j< $l; $j++){
  
  if($tab[0] > $tab[$p]){
      echo $tab[$p];
  break;
  }
  $p++;
}