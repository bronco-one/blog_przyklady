<?php

$tab1 = ['name' => 'Jan'];
$tab2 = ['name' => 'Andrzej'];
$tab3 = ['last_name' => 'Nowak'];
echo implode(' ', $tab1 + $tab2 + $tab3);
