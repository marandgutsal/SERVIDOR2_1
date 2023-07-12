<?php
/*
    $name123 = "KÖFN & Bi' Tek B123 An&&&larım - (Official Video)";
    
    echo $name123."<br>";
    $bcbcx = ignorarCaracteres($name123);

    echo $bcbcx."<br>";
*/
    function ignorarCaracteres($name123)
    {
        $i = 0;
        while(isset($name123[$i]))
        {
            if ($name123[$i] == "'" || $name123[$i] == "&")
            {
                $name123[$i] = " ";
            }
            $i++;
        }
        return $name123;
    }

?>