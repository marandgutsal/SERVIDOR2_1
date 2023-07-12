<?php
    /*$words[0] = "Ed";
    $words[1] = "Sheeran";
    $words[2] = "-";
    $words[3] = "Bad";
    $words[4] = "Habits";
    $words[5] = "[Official";
    $words[6] = "Video]";

    $cbbcx = sortearkeywords($words);*/

    function sortearkeywords($words)
    {
        for ($i = 0; $i < 7; $i++)
        {
            /*$cbcb = strlen($words[$i]);
            if ($cbcb == 1)
            {
                // echo "vnvncmn";
                //echo "ELIMINADO POR DEFECTO: ".$words[$i]."<br>";
                $words[$i] = " ";
            } else {
                echo $words[$i]."<br>";
            }*/
    
            for ($j = 0; $j <= $i; $j++)
            {
                if ($j == 0)
                {
                    $vbcbvc[$i] = "";
                }
                $vbcbvc[$i] .= $words[$j];
            }
            
            //echo "<br>";
            //echo $vbcbvc[$i];
        }

        return $vbcbvc;
    }

?>