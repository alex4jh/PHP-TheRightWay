<?php
function foo(){
   //do something
}


//functions que re


function suma (int $a, int $b, ... $valores): int {
   // return $a +$b;
    return array_sum ([$a,$b,... $valores]);
}
$resultado=suma (1,2,3,4,5,6,7,8,9);
var_dump ($resultado);




$usuarios=[
'juan'=>25.2,
'paco'];
function $total_gastado()