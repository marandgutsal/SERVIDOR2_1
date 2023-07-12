<?php

/*
    $name123 = "Ed     Sheeran - Bad   Habits [Official Video]";
    $bcbcx = separarKeyword($name123);

    //echo "<br><br><br>";
    //echo " + ".$bcbcx[1]."<br>";

    //$vbcbv = strlen($bcbcx);
    $vbcbv = count($bcbcx);
    //echo "<br><br><br>";
    //echo " /// ".$vbcbv."<br>";
    for($i=0;$i<$vbcbv;$i++)
    {
        //echo " +++++ ".strtolower($bcbcx[$i])."<br>";
    }
*/

    /*
    echo " - ".$words[2]."<br>";
    echo " - ".$words[3]."<br>";
    echo " - ".$words[4]."<br>";
    echo " - ".$words[5]."<br>";
    echo " - ".$words[6]."<br>";*/

    function separarKeyword($name123)
    {
        //echo "amount: words <br>";

    
        //$name123 = "aqua";
        //$name123 = "Ed%Sheeran%bad%habits";
        //$name123 = "Ed   Sheeran - Bad   Habits [Official Video]";
    
        $c = 0;
        $d = "*";
        
        $words[0] = "";
    
        $i = 0;
        //$ii = 0;
        
        while(isset($name123[$i]))
        {
            $words[$c] .= $name123[$i];
            if($name123[$i] == " " && $d == "*")
            {
                //echo $name123[$i]." ".$i." . "."<br>";
                //echo $name123[$i];
                //$words[0] .= " ----- ";
                $d = " ";
                //$ii++;
                $c++;
                $words[$c] = "";
            } else if($name123[$i] == " " && $d != "*")
            {
                //echo $name123[$i]." ".$i." . "."<br>";
                //$words[0] .= " ----- ";
                $d = " ";
            } else
            {
                //echo $name123[$i]." ".$i." % "."<br>";
                $d = "*";
                //$words[$c] = "";
    
                //$words[0] .= $i;
                //$cwwwww = 0;
            }
            /**/
            
            $i++;
            //echo " ";
        }
    
        //$name123[$i]
    
        /*
        echo "amount: ".$c." words <br>";
    
        echo " - ".$words[0]."<br>";
        echo " - ".$words[1]."<br>";
        echo " - ".$words[2]."<br>";
        echo " - ".$words[3]."<br>";
        echo " - ".$words[4]."<br>";
        echo " - ".$words[5]."<br>";
        echo " - ".$words[6]."<br>";
        */

        return $words;

    }

?>