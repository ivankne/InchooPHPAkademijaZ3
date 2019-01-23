<?php

//za početak fiskni unos
$redova=10;
$kolona=10;

function napuniMatricu($redova,$kolona){
    $podaci = [];
    for($i=0;$i<$redova;$i++){
        $kolone = [];
        for($j=0;$j<$kolona;$j++){
            $kolone[]=0;
        }
        $podaci[]=$kolone;
    }

    //brojac za punjenje
    $brojac=1;


    // prvi krug
    $a=1;  // brojač krugova 

    while ($brojac<=$redova*$kolona){

        for($i=$kolona-$a; $i>=($a-1);$i--){
            if($brojac>$redova*$kolona){
            return $podaci;
            }
            $podaci[$redova-$a][$i]=$brojac++;
        }

        for($i=$redova-($a+1); $i>=($a-1);$i--){
            if($brojac>$redova*$kolona){
                return $podaci;
            }
            $podaci[$i][$a-1]=$brojac++;
        }

        for ($i=$a;$i<$kolona-($a-1);$i++){
            if($brojac>$redova*$kolona){
                return $podaci;
            }
            $podaci[$a-1][$i]=$brojac++;

        }

        for($i=$a;$i<$redova-$a;$i++){
            if($brojac>$redova*$kolona){
                return $podaci;
            }
            $podaci[$i][$kolona-$a]=$brojac++;

        }
        $a++; //uvecaj krug
    }
    return $podaci;
}

$podaci = napuniMatricu($redova,$kolona);


echo "<table>";
for($i=0;$i<$redova;$i++){
    echo "<tr>";
    for($j=0;$j<$kolona;$j++){
        echo "<td>" . $podaci[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";






