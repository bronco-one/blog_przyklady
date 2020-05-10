<?php
$tab =['2','12','15','8','22','6','44','17'];

for($i=0;$i<count($tab);$i++){
    if($tab[$i]< 20){
        $tab2[]=$tab[$i];
    }
}
for($j=0;$j<count($tab2);$j++){
    echo $tab2[$j].'<br/>';
}