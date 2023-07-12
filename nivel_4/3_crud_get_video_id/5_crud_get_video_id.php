<?php

include("conexion.php");
$con=conectar();

include("guia_1/0_ignorar_caracteres.php");
include("guia_1/1_separar_keyword.php");//
include("guia_1/2_sortear_keyword.php");//
include("guia_1/3_get_json_data_search.php");//
include("guia_1/6_crud_video.php");//


include("testing/a_4_retornar.php");
// mejor_coincidencia($bvbvbvb, $response1, $caracter_especial)




include("1_crud_insert_keyword.php");
include("2_crud_temporalList.php");
include("3_crud_specificListVideo.php");
include("4_crud_insert_keywordVideo.php");





$nbccb = get_temporalList_register($con);
$temporalList_id = $nbccb[0];
$specificList_id = $nbccb[1];
$palabra = $nbccb[2];
echo " temporalList_id: " . $temporalList_id . "<br>";
echo " specificList_id: " . $specificList_id . "<br>";
echo " palabra: " . $palabra . "<br>";


$vnfvnfnvazxc = crud_insert_keyword($con, $palabra);
echo " -+keyword_id: " . $vnfvnfnvazxc . "<br><br><br>";


$vbfbvfbvf = crud_get_video_id($con, $palabra);
echo " - - - - - - - - - video_id ".$vbfbvfbvf[0] . "<br>";
$videoId123 = $vbfbvfbvf[0];

echo " + + + + + + <br>";

//echo "specificList_id " . $specificList_id . "<br>";
//echo "videoId " . $videoId123 . "<br>";
$specificListVideo_register = add_specificListVideo_register($specificList_id, $con, $videoId123);
echo "specificListVideo_register " . $specificListVideo_register . "<br>";


delete_temporalList_register($con,$palabra,$specificList_id);


echo "keyword_id ( vnfvnfnvazxc: ) " . $vnfvnfnvazxc . "<br>";
echo "videoId123: " . $videoId123 . "<br>";
$keywordVideo = crud_insert_keywordVideo($con, $vnfvnfnvazxc, $videoId123);
echo "keywordVideo: " . $keywordVideo . "<br>";


/*
$palabra = "Taylor Swift - Enchanted (Taylor's Version) (Lyric Video)";
$palabra = "Taylor Swift Enchanted";
*/

function crud_get_video_id($con, $palabra)
{
    $name = $palabra;

    /*
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = utf8_decode($_POST['name']);
    } else {
        $name = "Dare (La la la) - Shakira [ Remix ]";
    }
    */

    $respuesta1111["name"] = "name";
    $respuesta1111["last_year_sales"] = "last_year_sales";
    $respuesta1111["current_year_sales"] = "current_year_sales";
    $respuesta1111["url"] = "url";

    echo json_encode($respuesta1111);

    // 0
    echo "<br>0 ////////////////////////////////////////////////////////////////////////<br><br><br><br>";
    $poaz34 = ignorarCaracteres($name);
    echo json_encode($poaz34);

    // 1
    echo "<br>1111 ////////////////////////////////////////////////////////////////////////<br><br><br><br>";
    $bcbcx = separarKeyword($poaz34);
    echo json_encode($bcbcx);
    
    // 2
    echo "<br>2 ////////////////////////////////////////////////////////////////////////<br><br><br><br>";
    $cbbcx = sortearkeywords($bcbcx);
    echo json_encode($cbbcx);

    // 3
    /*
    echo "<br><br><br><br>";
    $vcfjvbf = $cbbcx[0];
    echo "<br>uno ".$vcfjvbf;
    $vcfjvbfbfvf = $cbbcx[1];
    echo "<br>dos ".$vcfjvbfbfvf;
    $qvcfjvbfbfvf = $cbbcx[2];
    echo "<br>tres ".$qvcfjvbfbfvf;

    ////////////////////////////////////////////////

    for ($i=0;$i<$dfnvdf;$i++)
    {
        $qvcfjvbfbfvf = $cbbcx[$i];
        echo "<br>... ".$qvcfjvbfbfvf;
    }
    */

    $dfnvdf = count($cbbcx);
    //echo "<br>cinco ".$dfnvdf;

    for ($i=$dfnvdf-1;$i>=0;$i--)
    {
        $qvcfjvbfbfvf = $cbbcx[$i];
        //echo "<br>=== ".$qvcfjvbfbfvf;

        // 3
        echo "<br>3 ////////////////////////////////////////////////////////////////////////<br><br><br><br>";
        $array_2 = getJsonDataSearch($qvcfjvbfbfvf);

        if (isset($array_2{"contents"}))
        {
            echo json_encode($array_2);
            //echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
            //echo "break";
            break;
        }
        else {
            //echo "again <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
        }

        // echo $array_2{"contents"}{"$postion"}{"video"}{"videoId"};

    }



















    
    // 5
    echo "<br>after 5 ////////////////////////////////////////////////////////////////////////<br><br><br><br>";

    //$acumulado[0] = "";
    $w = 0;
    while(isset($array_2{"contents"}{"$w"}{"video"}{"videoId"})) {
        echo $array_2{"contents"}{"$w"}{"video"}{"videoId"};
        echo "<br>";
        echo $array_2{"contents"}{"$w"}{"video"}{"title"};
        echo "<br>";
        echo $array_2{"contents"}{"$w"}{"video"}{"thumbnails"}{"0"}{"url"};
        echo "<br>";

        echo "<br>1 ////////////////////////////////////////////////////////////////////////<br><br><br><br>";
        $title = $array_2{"contents"}{"$w"}{"video"}{"title"};
        $bcbcx111 = separarKeyword($title);



        echo "1...... que s et: " . $bcbcx . " - " . $bcbcx111 . "<br>";
        echo "2... que s et: " . $palabra . " - " . $title . "<br>";
        //$score = matchKeywords1($bcbcx, $bcbcx111);
        

        
        //$caracter_especial = get_caracter_especial($response1, $response2);
        //$z91ww[0] = filtro_b($response1, $response2, $caracter_especial);



        $vnnvvnvnvnv[$w] = $title;
        
        $w++;
    }

    $z91ww = mejor_coincidencia($vnnvvnvnvnv, $palabra, $caracter_especial);

    $kjh = 0;
    while(isset($z91ww[$kjh])) {
        echo "3.0 que s et: " . $z91ww[$kjh][0] . "<br>";
        echo "3.1 que s et: " . $z91ww[$kjh][1] . "<br>";
        echo "3.2 que s et: " . $z91ww[$kjh][2] . "<br>";
        echo "3.3 que s et: " . $z91ww[$kjh][3] . "<br>";
        echo "3.4 que s et: " . $z91ww[$kjh][4] . "<br>";
        echo "3.5 que s et: " . $z91ww[$kjh][5] . "<br>";
        echo "3.6 que s et: " . $z91ww[$kjh][6] . "<br>";

        $score = $z91ww[$kjh][5];

        echo "4444 . . . . . " . "<br>";

        $acumulado[$kjh] = $score;

        $kjh++;
    }














    $maxValue = 0;
    $postion = 0;
    $wi = 0;
    while(isset($acumulado[$wi])) {
        echo " score: ".$acumulado[$wi]."<br>";

        if ($maxValue < $acumulado[$wi])
        {
            $maxValue = $acumulado[$wi];
            $postion = $wi;
        }

        $wi++;
    }

    echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
    echo $array_2{"contents"}{"$postion"}{"video"}{"videoId"};
    echo "<br>";
    echo $array_2{"contents"}{"$postion"}{"video"}{"title"};
    echo "<br>";
    echo $array_2{"contents"}{"$postion"}{"video"}{"thumbnails"}{"0"}{"url"};
    echo "<br>";



    // 6
    echo "<br>6 ////////////////////////////////////////////////////////////////////////<br><br><br><br>";

    $videoId = $array_2{"contents"}{"$postion"}{"video"}{"videoId"};
    echo "<br>6.1<br>";
    $title = $array_2{"contents"}{"$postion"}{"video"}{"title"};
    echo "<br>6.2<br>";
    $url = $array_2{"contents"}{"$postion"}{"video"}{"thumbnails"}{"0"}{"url"};
    echo "<br>6.3<br>";





        // 0
        echo "<br>0 ////////////////////////////////////////////////////////////////////////<br><br><br><br>";
        $title_2 = ignorarCaracteres($title);
        echo json_encode($title_2);






    $bvfbvdf = crudVideo($videoId, $title_2, $url, $con);
    echo "<br>6.4<br>";
    echo $bvfbvdf["video_id"];
    echo "<br>6.5<br>";
    echo $videoId;
    echo "<br>6.6<br>";

    echo "<br>6 end <br><br><br>";

    $nvfnvfnvf[0] = $bvfbvdf["video_id"];
    $nvfnvfnvf[1] = $videoId;

    return $nvfnvfnvf;
}

?>