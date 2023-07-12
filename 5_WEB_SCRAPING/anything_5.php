<?php
include("conexion.php");
$con=conectar();

include("simple_html_dom.php");

////////////////////////////////////

get_temporalList_register($con);
function get_temporalList_register($con)
{
    echo "¬";
    $sql1="SELECT DISTINCT temporalList_id, specificList_id, videoName FROM temporalList";
    $query=mysqli_query($con,$sql1);

    $ywy_2 = 0;
    while($row=mysqli_fetch_array($query)){
        if ($ywy_2 <1)
        {
            if (isset($row))
            {
                $ywy_2++;
            }
        }
    }

    if ($ywy_2 == 0)
    {
        //cvbbvbvbvbvb($con);
        bvcbvbvbvmnbvcbvc_123($con);
    }

}


////////////////////////////////////

function bvcbvbvbvmnbvcbvc_123($con)
{

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://kworb.net/poptr/");
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    $result = curl_exec($curl);
    curl_close($curl);
    
    // echo $result;
    
    $domResult = new simple_html_dom();
    $domResult->load($result);
    
    $cantidadColumnas = 8;
    $columnasBefore = 1;
    $columnaScrapeada = $cantidadColumnas - $columnasBefore;
    
    $cioc = $columnaScrapeada;
    //foreach($domResult->find("table.tbody.tr.td.div.a[href^=/url?]") as $link)
    
    $i = 0;
    foreach($domResult->find("td") as $link)
    {
        if ($cioc % $cantidadColumnas == 0)
        {
            echo " - " . $cioc . "<h1>" . $link->plaintext . "</h1></br>";
    
            $vbbvvb = $link->plaintext;
            echo " + " . $link->plaintext . "</h1></br>";
            $bfvfbvfbv[$i] = $vbbvvb;
            
            echo " * " . " - - - - - " . $bfvfbvfbv[$i] . "</h1></br></br></br></br></br></br>";
            $i++;
        } else {
            //echo " + " . $cioc . "<h1>" . $link->plaintext . "</h1></br>";
        }
        $cioc++;
    }
    
    //$name_2 = "frbvfvbfvf321234";
    $name_2 = $link;
    
    echo " : : : " . $name_2 . "<br>";
    
    CREAR_LISTA($con, $name_2, $bfvfbvfbv);

}

?>

<?php

//$name_2 = "frbvfvbfvf";
function CREAR_LISTA($con, $name_2, $bfvfbvfbv)
{
    $specific_list_id = new_specific_list($con,$name_2);

    temporal_list_videos($con, $bfvfbvfbv, $specific_list_id);
}

function temporal_list_videos($con, $bwe, $specific_list_id)
{
    echo " - - - - - - ";
    $i = 0;
    $bcbcbc_123 = count($bwe);
    echo ". - - - - - -: ".$bcbcbc_123;
    while($i <= $bcbcbc_123)
    {
        $vbfbvf = $bwe[$i];
        $cbbcbcb = ignorarCaracteres($vbfbvf);
        $sql1="INSERT INTO temporalList(specificList_id, videoName) VALUES('$specific_list_id','$cbbcbcb')";
        $query1= mysqli_query($con,$sql1);
        $i++;
        echo " * * * * * " . $i . " -:- " . $cbbcbcb . "<br>";
    }
    echo " + + + + + + + ";
}

function new_specific_list($con,$name_2)
{
    $sql1="INSERT INTO specificList(specificList_name) VALUES('$name_2')";
    $query1= mysqli_query($con,$sql1);
            
    $query3 = "
        SELECT LAST_INSERT_ID() as inserted
    ";

    echo "8";
    $query1q23= mysqli_query($con,$query3);
    echo "9";

    $row2=mysqli_fetch_array($query1q23);
    echo "10";
    
    $nfnvjfjnvjf = $row2["inserted"];
    echo "11";
    //echo "La inserción se realizó . . . . . ".$nfnvjfjnvjf;
    //$respuesta["video_id"] = $nfnvjfjnvjf;

    return $nfnvjfjnvjf;
}

function ignorarCaracteres($name123)
{
    $i = 0;
    while(isset($name123[$i]))
    {
        if ($name123[$i] == "'") // || $name123[$i] == "a"
        {
            $name123[$i] = ":";
            echo ":";
        }
        $i++;
    }
    return $name123;
}

?>