<?php

/*
$response1 = "Carro!";
$response2 = "Carro Carro Carrov& 'Carro Carro Car";

$caracter_especial = get_caracter_especial($response1, $response2);
*/
function get_caracter_especial($response1, $response2)
{
    $caracter_especial = "*";

    $caracteres_especiales_1 = "0123456789()+,-./:;<=>?@[\]^ABCDEFGHIJKLMNOPQRSTUVWXYZ!&'`abcdefghijklmnopqrstuvwxyz{|}~"; 
    

    
    $response1.=$response2;
    
    $i = 0;
    while (isset($response1[$i]))
    {
        $j = 0;
        while (isset($caracteres_especiales_1[$j]))
        {
            if ($response1[$i] == $caracteres_especiales_1[$j])
            {
                $caracteres_especiales_1[$j] = $caracter_especial;
            }
            // echo $response1[$i] . " - " . $caracteres_especiales_1[$j] . " ///// ";
            $j++;
        }
        $i++;
    }
    
    $nuevo_caracter_especial = "*";
    
    
    $i = 0;
    while (isset($caracteres_especiales_1[$i]))
    {
        if ($caracteres_especiales_1[$i] == $caracter_especial)
        {
            // $caracteres_especiales_1[$j] = $caracter_especial;
        } else {
            $nuevo_caracter_especial = $caracteres_especiales_1[$i];
            break;
        }
        $i++;
    }
    
    echo "nuevo_caracter_especial: " . $nuevo_caracter_especial . "<br>";
    return $nuevo_caracter_especial;
}

?>