<?php

//Exercici 1
echo "<br><br><b>Exercici 3</b><br>";


function erastotenes($tableLimit){
    $taula = array();

    for($i=2; $i<=$tableLimit; $i++){
       $taula[$i] = true;
    }

    $taula[2]=true;

    for($i=2; $i<=$tableLimit; $i++)
    {
        for($j=2;$i*$j<=$tableLimit; $j++){
            $taula[$i*$j]=false;
        }
    }
    $taula = array_filter($taula);
    //print_r(array_keys($taula));

    foreach (array_keys($taula) as $key){
        echo $key . ", ";
    }
};

erastotenes(30);