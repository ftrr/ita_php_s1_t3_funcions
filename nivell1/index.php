<?php

//Exercici 1
function parellImparell($valor){


    if($valor & 1){
        echo $valor . ' es imparell.';
    } else {
        echo $valor . ' es parell.';
    }
}


parellImparell(35);