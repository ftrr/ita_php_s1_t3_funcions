<?php

//Exercici 2
echo "<br><b>Exercici 1</b><br>";


function parellImparell($valor){


    if($valor & 1){
        echo $valor . ' es imparell.';
    } else {
        echo $valor . ' es parell.';
    }
}
parellImparell(35);


//Exercici 2
echo "<br><br><b>Exercici 2</b><br>";

function de2en2(){
    $x = 0;
    while($x<10){
        $x++;
        $x++;
        echo $x . ", ";
    }
}
de2en2();


//Exercici 3
echo "<br><br><b>Exercici 2</b><br>";

function de2en2tots($valor){
    if($valor & 1){
        $x = -1;
    }else{
        $x = 0;
    }
    
    while($x<$valor-1){
        $x++;
        $x++;
        echo $x . ", ";
    }
}
de2en2tots(21);
