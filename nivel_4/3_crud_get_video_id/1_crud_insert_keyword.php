<?php
/*include("conexion.php");
$con=conectar();

$palabra = "Katy Perry - Roar (Lyric Video)";
$vnfvnfnvfnvf = crud_insert_keyword($con, $palabra);
echo " - keyword_id: " . $vnfvnfnvfnvf;
*/

function crud_insert_keyword($con, $palabra)
{
    $sql1="SELECT DISTINCT keyword.keyword_id FROM keyword 
    WHERE keyword.keyword_content = '$palabra'";
    $query=mysqli_query($con,$sql1);

    $ywy_2 = 0;
    while($row=mysqli_fetch_array($query)){
        
        if (isset($row))
        {
            echo "<br>";
            $nfnvjfjnvjf = $row["keyword_id"];
            echo $nfnvjfjnvjf;
            echo "<br><br>";
            /*
            $respuesta["keywordVideo_id"] = $nfnvjfjnvjf;
            echo $respuesta["keywordVideo_id"];*/
            $ywy_2++;
        }

    }

    if ($ywy_2 == 0)
    {
        $sql1="INSERT INTO keyword(keyword_content, keyword_score) VALUES('$palabra','0')";
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
        echo "La inserción se realizó . . . . . ".$nfnvjfjnvjf;

        echo " . . . . ".$nfnvjfjnvjf."<br>";
    } else 
    {
        echo " : : : : ".$nfnvjfjnvjf."<br>";
    }

    //$respuesta["video_id"] = $nfnvjfjnvjf;
    return $nfnvjfjnvjf;

}
?>