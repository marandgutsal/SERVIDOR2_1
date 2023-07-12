<?php

/*
    //include("conexion.php");

    //include("encontrar_artist_song.php");
    //$con=conectar();

    //$name123 = "aqua"; // correct
    //$name123 = "Ed%Sheeran"; // correct
    //$name123 = "Ed Sheeran"; // correct

    //$name123 = "Ed Sheeran - Bad Habits [Official Video]"; // incorrect
    //$name123 = "Bad%Habits"; // correct
    //$name123 = "Ed%Sheeran%Bad%Habits%[Official%Video]"; // correct
    //$name123 = "Ed%Sheeran%-%Bad%Habits%[Official%Video]"; // CORRECT
    $name123 = "Ed Sheeran +++++ Bad Habits [Official Video]"; // CORRECT

    //echo $name123;

    $array_2 = getJsonDataSearch($name123);
    //print_r($array_2);
*/

    function getJsonDataSearch($name123)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://youtube-search-and-download.p.rapidapi.com/search?query=".$name123."&sort=v",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: youtube-search-and-download.p.rapidapi.com",
                "X-RapidAPI-Key: 70b382d8e4mshabf7e996a3c1012p1aa8aajsn8f5fc173249f"
            ],
        ]);
    
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
    
        curl_close($curl);
    
        if ($err) {
            //echo "cURcnjkcdnjkcndsjkcndsjkncjdsjk - - - - - - - -";
            //echo "cURL Error #:" . $err;
            $array_2 = "";
        } else {
            //echo "cURcnjkcdnjkcndsjkcndsjkncjdsjk + + + + + + + + + ";
            //echo $response;
            //print_r("vbfjbvfdbvfbvfdbvfdbvjfdbvjdf9845884848484848");
            $array_2 = json_decode($response, true);
            //print_r($array_2);
            //print_r($array_2{"contents"});
        }

        /*
            print_r("<br><br><br><br><br>");
            print_r($array_2{"contents"}{"0"});
            print_r("<br><br><br><br><br>");
            print_r($array_2{"contents"}{"0"}{"video"});
            print_r("<br><br><br><br><br>");
            print_r($array_2{"contents"}{"0"}{"video"}{"videoId"});
            print_r($array_2{"contents"}{"0"}{"video"}{"thumbnails"}{"0"}{"url"});
            print_r("<br><br><br><br><br>");
            print_r($array_2{"contents"}{"1"}{"video"}{"videoId"});
            print_r($array_2{"contents"}{"1"}{"video"}{"thumbnails"}{"0"}{"url"});
            print_r("<br><br><br><br><br>");
            print_r($array_2{"contents"}{"2"}{"video"}{"videoId"});
            print_r($array_2{"contents"}{"2"}{"video"}{"thumbnails"}{"0"}{"url"});
            print_r("<br><br><br><br><br>");
            print_r($array_2{"contents"}{"3"}{"video"}{"videoId"});
            print_r($array_2{"contents"}{"3"}{"video"}{"thumbnails"}{"0"}{"url"});
            print_r("<br><br><br><br><br>");
            print_r($array_2{"contents"}{"4"}{"video"}{"videoId"});
            print_r($array_2{"contents"}{"4"}{"video"}{"thumbnails"}{"0"}{"url"});
            print_r("<br><br><br><br><br>");
        */

        //return $response;
        return $array_2;
        
        /*https://rapidapi.com/h0p3rwe/api/youtube-search-and-download/pricing
        Search videos/channels/playlists
        */
    }

?>