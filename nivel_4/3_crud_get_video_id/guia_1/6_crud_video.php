<?php
    function crudVideo($videoId, $title, $url, $con)
    {
        $sql="SELECT * FROM video WHERE video_youtube_id='$videoId'";
        $query=mysqli_query($con,$sql);
    
        $row=mysqli_fetch_array($query);
    
        if (isset($row))
        {
            echo "1";
            $nfnvjfjnvjf = $row["video_id"];
            echo "2";
            $respuesta["video_id"] = $nfnvjfjnvjf;
            echo "3";
        } else
        {
            echo "4";
            $video_content="CNDJCD";
            echo "5";
    
            $sql1234="INSERT INTO video( video_youtube_id, video_name, video_image, video_content ) VALUES('$videoId','$title','$url','$video_content')";
            echo "6 ".$videoId." ".$title." ".$url." ".$video_content;
            $query123456= mysqli_query($con,$sql1234);
            echo "7";
            
            //recibo el último id
            //echo "La inserción se realizó"; 
            
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
            $respuesta["video_id"] = $nfnvjfjnvjf;
        }
        echo "12";
        return $respuesta;
    }
?>