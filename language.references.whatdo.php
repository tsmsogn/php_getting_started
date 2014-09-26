<?php
$a =& $c; 
$b = $c;

$c = 1;

var_dump($a); #=> int(1)  
var_dump($b); #=> NULL
var_dump($c); #=> int(1)
