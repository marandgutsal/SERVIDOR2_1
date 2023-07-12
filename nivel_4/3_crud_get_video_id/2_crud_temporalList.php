<?php

/*
include("conexion.php");
$con=conectar();

$palabra = "Katy Perry - Roar (Lyric Video)";
$vnfvnfnvfnvf = crud_insert_keyword($con, $palabra);
echo " - keyword_id: " . $vnfvnfnvfnvf;
*/

//////////////////////////////////////////////////////////////////////////////////////////////
/*
$nbccb = get_temporalList_register($con);
$temporalList_id = $nbccb[0];
$specificList_id = $nbccb[1];
$palabra = $nbccb[2];

echo " - temporalList_id: " . $temporalList_id . " - specificList_id: " . $specificList_id . " - palabra: " . $palabra;
*/
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
                $nfnvjfjnvjf_1 = $row["temporalList_id"];
                $nfnvjfjnvjf_2 = $row["specificList_id"];
                $nfnvjfjnvjf_3 = $row["videoName"];
    
                $ywy_2++;
            }
        }
    }

    $rowbc[0] = $nfnvjfjnvjf_1;
    $rowbc[1] = $nfnvjfjnvjf_2;
    $rowbc[2] = $nfnvjfjnvjf_3;

    return $rowbc;
}

//////////////////////////////////////////////////////////////////////////////////////////////

// delete_temporalList_register($con,$palabra,$specificList_id);
function delete_temporalList_register($con,$palabra,$specificList_id)
{
    $sql = "DELETE FROM `temporalList` WHERE temporalList.videoName = '$palabra' and temporalList.specificList_id = $specificList_id";
    $query=mysqli_query($con,$sql);
}


?>