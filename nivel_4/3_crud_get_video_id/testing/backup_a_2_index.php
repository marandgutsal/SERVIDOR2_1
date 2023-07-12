<?php
/*
$caracter_especial = "*";

$response1 = "Carro 1nvnv Carro 22rro Carro";
$response2 = "Carro Carro Carro Carro nvnv rro CarroCarro221";

echo $response1."<br>";
echo $response2."<br><br><br>";


$z91ww = filtro_b($response1, $response2, $caracter_especial);
*/

function filtro_b($response1, $response2, $caracter_especial)
{
    $bvbv[0] = $response1;
    $bvbv[1] = $response2;
    $cc83n[0] = 0;
    $bcq = 0;
    $uxuxuu1 = $bvbv;
    $uxuxuu2 = $cc83n;
    $cbcbcbb = count($uxuxuu2);
    $bbcbcbzbbb = $cbcbcbb - 1;
    echo "::: ... ::::".$uxuxuu2[$bbcbcbzbbb]."<br>";
    $zmzmzmzm[0] = $uxuxuu2[$bbcbcbzbbb];
    $uxuxuu3 = $bcq;
    $bb1763 = llamar_funcion($uxuxuu1, $uxuxuu2, $uxuxuu3, $caracter_especial);
    
    
    
    echo "<3<3<3<3<3<3<3<3<3<3<3<3<3<br><br><br><br><br>";
    
    $zyma22 = 0;
    while(isset($zmzmzmzm[$zyma22]))
    {
        $zyma22++;
    
        $uxuxuu1 = $bb1763[0];
        
        echo "::: +-+ ::::".$uxuxuu1[0]."<br>";
        echo "::: +.+ ::::".$uxuxuu1[1]."<br>";
        $uxuxuu2 = $bb1763[1];
        $cbcbcbb = count($uxuxuu2);
        $bbcbcbzbbb = $cbcbcbb - 1;
        echo "::: ... ::::".$uxuxuu2[$bbcbcbzbbb]."<br>";
        $zmzmzmzm[$zyma22] = $uxuxuu2[$bbcbcbzbbb];
        $uxuxuu3 = $bb1763[2];
        $bb1763 = llamar_funcion($uxuxuu1, $uxuxuu2, $uxuxuu3, $caracter_especial);
    
    
    
    
        $qiii = $zyma22 - 1;
        if ($zmzmzmzm[$qiii] == $zmzmzmzm[$zyma22])
        {
            echo "igual".$zmzmzmzm[$qiii]." - ".$zmzmzmzm[$zyma22]."<br>";
            break;
        } else {
            echo "diferente".$zmzmzmzm[$qiii]." - ".$zmzmzmzm[$zyma22]."<br>";
        }
    
        echo ".-.-.-.-.-.-.-" . $zmzmzmzm[$zyma22]."<br>";
        
    }
    
    echo "<3<3<3<33<3<3<3<3<3<3<3<3<3<br><br><br><br><br>";










    echo "564734829129<br><br><br><br><br>";
    echo "secuencias amount: ".$zyma22."<br>";
    echo $response1."<br>";
    echo $response2."<br>";
    echo $uxuxuu1[0]."<br>";
    echo $uxuxuu1[1]."<br>";
    $vbbv1z9 = $uxuxuu1[0] . $uxuxuu1[1];
    $xc355 = 0;
    $c7938 = 0;
    $wqw = 0;
    while (isset($vbbv1z9[$wqw]))
    {
        if ($vbbv1z9[$wqw] == $caracter_especial)
        {
            $xc355++;
        } else {
            $c7938++;
        }
    
        $wqw++;
    }
    echo "score: ".$xc355."<br>";
    echo "negative score: ".$c7938."<br>";
    echo "//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////"."<br>";


    $vbbvbvbv[0] = $zyma22; // secuencias amount
    $vbbvbvbv[1] = $response1; // primer string
    $vbbvbvbv[2] = $response2; // segundo string
    $vbbvbvbv[3] = $uxuxuu1[0]; // n... resultado #1
    $vbbvbvbv[4] = $uxuxuu1[1]; // n... resultado #2
    $vbbvbvbv[5] = $xc355; // positive score
    $vbbvbvbv[6] = $c7938; // negative score

    return $vbbvbvbv;
}


function encapsular_filtro($response1, $response2, $caracter_especial)
{
    $amount1 = 0;
    $amount2 = 0;

    $i = 0;
    while (isset($response1[$i]))
    {
        if ($response1[$i] == $caracter_especial)
        {
            $amount1++;
        }
        
        $i++;
    }

    $j = 0;
    while (isset($response2[$j]))
    {
        if ($response2[$j] == $caracter_especial)
        {
            $amount2++;
        }
        
        $j++;
    }

    echo "longitud_1 " . $amount1 . "<br>";
    echo "longitud_2 " . $amount2 . "<br>";

    $vbvb882[0] = $amount1;
    $vbvb882[1] = $amount2;

    return $vbvb882;
}


function llamar_funcion($bvbv, $cc83n, $bcq, $caracter_especial)
{
    $vvc642 = filtro_a($bvbv[0], $bvbv[1], $caracter_especial);
    $bvbv[0] = $vvc642[0];
    $bvbv[1] = $vvc642[1];
    $zpqm = encapsular_filtro($bvbv[0], $bvbv[1], $caracter_especial);
    $v_111 = $zpqm[0];
    $v_222 = $zpqm[1];
    $cc83n[$bcq] = $v_111;
    $bcq++;

    $nvbn1976[0] = $bvbv;
    $nvbn1976[1] = $cc83n;
    $nvbn1976[2] = $bcq;

    return $nvbn1976;
}


function filtro_a($response1, $response2, $caracter_especial)
{

    $k = 0;
    $posiciones[$k] = 0;
    $posiciones2[$k] = "0";
    
    $i = 0;
    while (isset($response1[$i]))
    {
    
        $j = 0;
        while (isset($response2[$j]))
        {
    
            if ($response1[$i] == $response2[$j] && $response1[$i] != $caracter_especial && $response2[$j] != $caracter_especial)
            {
                $posiciones___[$k] = $i;
                $posiciones[$k] = $j;
                $posiciones2[$k] = $response2[$j];
                $repeticiones[$k] = 0;
                $k++;
            }
    
            $j++;
        }
    
        $i++;
    }
    /*
    echo " longitud uno: ".$i."<br>";
    echo " longitud dos: ".$j."<br><br><br><br>";
    */

    $m = 0;
    while (isset($posiciones[$m]))
    {
        /*
        echo $posiciones___[$m]." ";
        echo $posiciones[$m]." ";
        echo $posiciones2[$m]." ";
        echo " = ";
        echo $repeticiones[$m]." <br>";
        */
        $vbvb[$posiciones[$m]] = $posiciones2[$m];
        $m++;
    }
    
    //echo "<br><br><br><br><br>";
    
    $m = 0;
    while ($m <= 200)
    {
    
        $vnvn = $m + 1;
        if (isset($posiciones___[$m]))
        {
    
            $bbv124 = $posiciones[$m] - $posiciones___[$m];
            
            // echo $posiciones[$m] . " - " . $posiciones___[$m] . " = " . $bbv124 . " : " . $posiciones2[$m] . "<br>";
    
    
            
    
            
            if (isset($bvv333[$bbv124]))
            {
                $bbcbcb=count($bvv333_2[$bbv124]);
                $bvv333[$bbv124] += 1;
                $bvv333_1[$bbv124] .= $posiciones2[$m];
                $bvv333_2[$bbv124][$bbcbcb] = $posiciones[$m];
                $bvv333_3[$bbv124][$bbcbcb] = $posiciones___[$m];
            } else {
                $bbcbcb=0;
                $bvv333[$bbv124] = 1;
                $bvv333_1[$bbv124] = $posiciones2[$m];
                $bvv333_2[$bbv124][$bbcbcb] = $posiciones[$m];
                $bvv333_3[$bbv124][$bbcbcb] = $posiciones___[$m];
            }
    
            
    
        }
    
        $m++;
    }
    
    
    //echo "<br><br><br>";
    
    $bv18211 = 0;
    while ($bv18211 <= 50)
    {
    
        if (isset($bvv333[$bv18211]))
        {
            // echo " - " . $bvv333[$bv18211] . $bvv333_1[$bv18211] . "<br>";
        } else 
        {
            // echo " - " . "<br>";
        }
    
        $bv18211++;
    }
    /*
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    
    echo "<br><br><br>";
    echo $response1."<br>";
    echo $response2."<br>";
    
    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    */
    
    $mmpvbcbvbvm_1 = "";
    $mmpvbcbvbvm_2 = "";
    $mmpvbcbvbvm_3 = "";
    
    
    $bvbv128 = "ñ";
    
    $mmpvbcbvbvm = 0;
    $bv1821192 = 0;
    $xxxxxxx = 0;
    $yyyyyyy = 0;
    while ($bv1821192 <= 150)
    {
        if (isset($bvv333[$bv1821192]))
        {
            if ($bvv333[$bv1821192] >= $mmpvbcbvbvm)
            {
                $mmpvbcbvbvm = $bvv333[$bv1821192];
    
                $mmpvbcbvbvm_1 = $bvv333_1[$bv1821192];
                $xxxxxxx = $bv1821192;
                $mmpvbcbvbvm_2 = $bvv333_2[$bv1821192][0];
                $mmpvbcbvbvm_3 = $bvv333_3[$bv1821192][0];
            }
        }
    
        $bv1821192++;
    }
    
    /*
    echo "<br><br><br>";
    echo $mmpvbcbvbvm."<br>";
    echo $mmpvbcbvbvm_1."<br>";
    echo $mmpvbcbvbvm_2."<br>";
    echo $mmpvbcbvbvm_3."<br>";
    */

    $vc = 0;
    while (isset($bvv333_2[$xxxxxxx][$vc]))
    {
        //echo " - ".$bvv333_2[$xxxxxxx][$vc]."<br>";
        // // //echo $response2[$bvv333_2[$xxxxxxx][$vc]]."<br>";
        $response2[$bvv333_2[$xxxxxxx][$vc]] = $caracter_especial;
        $vc++;
    }
    
    $va = 0;
    while (isset($bvv333_3[$xxxxxxx][$va]))
    {
        //echo " + ".$bvv333_3[$xxxxxxx][$va]."<br>";
        // // //echo $response1[$bvv333_3[$xxxxxxx][$va]]."<br>";
        $response1[$bvv333_3[$xxxxxxx][$va]] = $caracter_especial;
        $va++;
    }
    
    
    //echo "<br><br><br>";
    echo $response1."<br>";
    echo $response2."<br>";
    
    $bvbv[0] = $response1;
    $bvbv[1] = $response2;

    return $bvbv;
}

?>