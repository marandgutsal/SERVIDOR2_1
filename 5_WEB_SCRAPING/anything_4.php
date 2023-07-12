<?php
include("simple_html_dom.php");

////////////////////////////////////

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://kworb.net/poptr/");
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($curl);
curl_close($curl);

echo $result;


/*

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
*/

?>