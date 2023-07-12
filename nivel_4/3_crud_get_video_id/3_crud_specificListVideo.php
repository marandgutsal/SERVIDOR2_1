<?php
/*
include("conexion.php");
$con=conectar();

add_specificListVideo_register($specificList_id, $con, $videoId);
*/

function add_specificListVideo_register($specificList_id, $con, $videoId)
{
    $sql1="SELECT DISTINCT specificListVideo.specificListVideo_id, specificListVideo.video_id FROM specificListVideo 
    WHERE specificListVideo.specificList_id = '$specificList_id'";
    $query=mysqli_query($con,$sql1);

    $ywy_21 = 0;
    while($row=mysqli_fetch_array($query)){
        if (isset($row))
        {
            echo "<br>";
            $nfnvjfjnvjf_1 = $row["specificListVideo_id"];
            $nfnvjfjnvjf_2 = $row["video_id"];
            echo $nfnvjfjnvjf_1;
            echo $nfnvjfjnvjf_2;
            echo "<br><br>";
            $ywy_21++;
        }
    }


    $estado = "0";


    if ($ywy_21 == 0)
    {
        $sql12="INSERT INTO specificListVideo(video_id, specificList_id) VALUES('$videoId','$specificList_id')";
        $query1= mysqli_query($con,$sql12);
        
        $query3 = "
            SELECT LAST_INSERT_ID() as inserted
        ";
        $query1q23= mysqli_query($con,$query3);
        $row2=mysqli_fetch_array($query1q23);
        $estado = $row2["inserted"];
        echo "La inserción se realizó . . . . . ".$estado."<br>";
        
    } else 
    {
        $new_videoId = $nfnvjfjnvjf_2 . ", " . $videoId;
        $sql12="UPDATE specificListVideo SET video_id='$new_videoId' WHERE specificListVideo_id = '$nfnvjfjnvjf_1'";
    
        $query1= mysqli_query($con,$sql12);
        $estado = $nfnvjfjnvjf_1;
    }

    return $estado;

}

?>