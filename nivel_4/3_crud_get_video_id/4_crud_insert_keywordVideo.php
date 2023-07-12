<?php

/*
include("conexion.php");
$con=conectar();

$keyword_id = "302";
$video_id = "558";
$vnvncnvc = crud_insert_keywordVideo($con, $keyword_id, $video_id);

echo "keyword_id " . $keyword_id . "<br>";
echo "video_id " . $video_id . "<br>";
echo "keywordVideo " . $vnvncnvc . "<br>";
*/

function crud_insert_keywordVideo($con, $keyword_id, $video_id)
{
    $sql1="SELECT DISTINCT keywordvideo.keywordVideo_id FROM video 
    INNER JOIN keywordvideo ON keywordvideo.video_id = video.video_id 
    INNER JOIN keyword ON keywordvideo.keyword_id = keyword.keyword_id 
    WHERE keyword.keyword_id = '$keyword_id' and video.video_id = '$video_id'";
    $query=mysqli_query($con,$sql1);
    
    $ywy_2 = 0;
    while($row=mysqli_fetch_array($query)){
        
        if (isset($row))
        {
            echo "<br>";
            $nfnvjfjnvjf = $row["keywordVideo_id"];
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
        $nfnvjfjnvjf = crud_insert_keywordVideo_2($con, $keyword_id, $video_id);
    
        echo " no. . . . ".$nfnvjfjnvjf."<br>";
    } else 
    {
        echo " si: : : : ".$nfnvjfjnvjf."<br>";
    }

    return $nfnvjfjnvjf;

}


function crud_insert_keywordVideo_2($con, $keyword_id, $video_id)
{
    $sql1="INSERT INTO keywordvideo(keyword_id, video_id) VALUES('$keyword_id','$video_id')";
    $query1= mysqli_query($con,$sql1);
    $query3 = "
        SELECT LAST_INSERT_ID() as inserted
    ";
    $query1q23= mysqli_query($con,$query3);
    $row2=mysqli_fetch_array($query1q23);
    $nfnvjfjnvjf = $row2["inserted"];
    return $nfnvjfjnvjf;
}

?>