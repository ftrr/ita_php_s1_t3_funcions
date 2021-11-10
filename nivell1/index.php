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
echo "<br><br><b>Exercici 3</b><br>";

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



//Exercici 4
echo "<br><br><b>Exercici 4</b><br>";



//Exercici 5
echo "<br><br><b>Exercici 5</b><br>";

function grauEstudiant($nota){
    switch($nota){
        case ($nota>=60);
            echo "Primera divisió";
            break;
        case ($nota>=45 && $nota<=59) ;
            echo "Segona divisió";
            break;
        case ($nota>=33 && $nota<=44) ;
            echo "Tercera divisió";
            break;
        case ($nota<33) ;
            echo "A reprovar";
            break;
        default:
            echo "La nota no es correcta";
    }
}

grauEstudiant(30);
