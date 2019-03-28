<?php
$table=array();
$table[]=array(1,2,3);
$table[]=array(4,5,6);
$table[]=array(7,8,9);



/****************** jugador 1 **************** */

$X=rand(0,2);
$Y=rand(0,2);
    if (is_int($table[$X][$Y])){
       echo $table[$X][$Y]='X';
    }else{
        $X=rand(0,2);
        $Y=rand(0,2);
            if (is_int($table[$X][$Y])){
             echo $table[$X][$Y]='X';
         }
    }

/****************** jugador 2 **************** */

$X=rand(0,2);
$Y=rand(0,2);

if (is_int($table[$X][$Y])){
    echo $table[$X][$Y]='O';
}else{
    $X=rand(0,2);
    $Y=rand(0,2);
}







