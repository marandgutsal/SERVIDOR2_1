<?php

include("backup_a_2_index.php");
include("aaaaaaaaaaa.php");

$caracter_especial = "*";

$response1 = "Carro 1nvnv Carro 22rr0 Carro";

$response2 = "Carro Carro Carro Carro nvnv rro CarroCarro221";
$response3 = "Carro rojo";
$response4 = "Carros";
$response5 = "Carro Carros";
$response6 = "Automóviles y Carros";


$bvbvbvb[0] = $response2;
$bvbvbvb[1] = $response3;
$bvbvbvb[2] = $response4;
$bvbvbvb[3] = $response5;
$bvbvbvb[4] = $response6;

/*
$z91ww = mejor_coincidencia($bvbvbvb, $response1, $caracter_especial);


echo "<br><br><br><br><br><br>" . "return function" . "<br><br><br><br><br><br>";


$kjh = 0;
while(isset($z91ww[$kjh])) {
    echo "3.0 que s et: " . $z91ww[$kjh][0] . "<br>";
    echo "3.1 que s et: " . $z91ww[$kjh][1] . "<br>";
    echo "3.2 que s et: " . $z91ww[$kjh][2] . "<br>";
    echo "3.3 que s et: " . $z91ww[$kjh][3] . "<br>";
    echo "3.4 que s et: " . $z91ww[$kjh][4] . "<br>";
    echo "3.5 que s et: " . $z91ww[$kjh][5] . "<br>";
    echo "3.6 que s et: " . $z91ww[$kjh][6] . "<br>";

    $score = $z91ww[$kjh][5];

    echo "4444 . . . . . " . "<br>";

    $acumulado[$kjh] = $score;

    $kjh++;
}
*/

function mejor_coincidencia($bvbvbvb, $response1, $caracter_especial)
{

    $ij = 0;
    while(isset($bvbvbvb[$ij]))
    {
        echo $ij . " _ _ _ _ _ _ " . $bvbvbvb[$ij] . "<br>";
        
        $caracter_especial = get_caracter_especial($response1, $bvbvbvb[$ij]);
        $z91ww[$ij] = filtro_b($response1, $bvbvbvb[$ij], $caracter_especial);
    
        $ij++;
    }
    
    
    
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    echo "<3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) <3 :) " . "<br>";
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    $maxz = 0;
    $zxcvbb = 0;
    while(isset($z91ww[$zxcvbb]))
    {
    /*
        $vbbvbvbv[0] = $zyma22; // secuencias amount
        $vbbvbvbv[1] = $response1; // primer string
        $vbbvbvbv[2] = $response2; // segundo string
        $vbbvbvbv[3] = $uxuxuu1[0]; // n... resultado #1
        $vbbvbvbv[4] = $uxuxuu1[1]; // n... resultado #2
        $vbbvbvbv[5] = $xc355; // positive score
        $vbbvbvbv[6] = $c7938; // negative score
    */
    
        echo ":::: -i- position ".$zxcvbb."<br>"; // $i position
        echo ":: secuencias amount ".$z91ww[$zxcvbb][0]."<br>";
        echo ":: primer string ".$z91ww[$zxcvbb][1]."<br>";
        echo ":->: segundo string ".$z91ww[$zxcvbb][2]."<br>";
        echo ":: n... resultado #1 ".$z91ww[$zxcvbb][3]."<br>";
        echo ":: n... resultado #2 ".$z91ww[$zxcvbb][4]."<br>";
        echo ":+: positive score ".$z91ww[$zxcvbb][5]."<br>";
        echo ":-: negative score ".$z91ww[$zxcvbb][6]."<br>";
        
        $ycbq = $zxcvbb + 1;
        if (isset($z91ww[$ycbq]))
        {
            if ($z91ww[$zxcvbb][5] >= $z91ww[$ycbq][5] && $z91ww[$zxcvbb][5] >= $z91ww[$maxz][5])
            {
                $maxz = $zxcvbb; echo $z91ww[$zxcvbb][5]." mayor ".$z91ww[$ycbq][5]." y que ".$z91ww[$maxz][5]."<br>";
            }
        }
        echo "<br>";
        
        $zxcvbb++;
    }
    
/*    
    echo "<br><br><br><br><br><br><br>";
    echo "max: ".$maxz."<br>";
    echo "secuencias amount: ".$z91ww[$maxz][0]."<br>";
    echo "primer string: ".$z91ww[$maxz][1]."<br>";
    echo "segundo string: ".$z91ww[$maxz][2]."<br>";
    echo "n... resultado #1: ".$z91ww[$maxz][3]."<br>";
    echo "n... resultado #2: ".$z91ww[$maxz][4]."<br>";
    echo "positive score: ".$z91ww[$maxz][5]."<br>";
    echo "negative score: ".$z91ww[$maxz][6]."<br>";
*/

    return $z91ww;
}

?>