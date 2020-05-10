<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />

<title></title>
<style>
<?php include( __DIR__.'/style.css'); ?>
</style>
</head>
<body>

 
<div class="menu">
<ol>
 <?php foreach($tab as $t =>$v) { 
    echo '<li>'.$t.'<ul>';
       foreach($v as $v2){
       	echo '<li><a href="#">'.$v2.'</a></li>';
       }
    echo '</ul></li>';
    } ?>
  </ol>
  </div>
</body>
</html>