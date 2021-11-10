<?php


//Exercici 1
echo "<br><br><b>Exercici 1</b><br>";

for($any = 1968; $any<=2016; $any+=4){
    echo $any . "<br>";
}


//Exercici 2
echo "<br><br><b>Exercici 2</b><br>";

function trucada($minuts){
    $cost = 0.10;
    if($minuts == 0){
        echo "Sense cost";
    }
    else if($minuts<3 && $minuts>0){
        echo "Cost: ".$cost ."€";
    }else{
        $minutsAddiccionals = $minuts-3;
        $incrementCost = $minutsAddiccionals*0.05;
        echo "Cost: ". ($cost+$incrementCost) ."€";
    }
}

trucada(60);


//Exercici 3
echo "<br><br><b>Exercici 3</b><br>";

$preuXocolata=1;
$preuXiclets=0.5;
$preuCarmels=1.5;




function compraBotiga($xocolata, $xiclets, $carmels){

    global $preuXocolata,$preuXiclets, $preuCarmels;
    $subtotalXocolata = $xocolata * $preuXocolata;
    $subtotalXiclets = $xiclets * $preuXiclets;
    $subtotalCarmels = $carmels * $preuCarmels;

    $total = $subtotalXocolata + $subtotalXiclets + $subtotalCarmels;

    echo "Total: " . $total . "€";
}

compraBotiga(2,1,2);

