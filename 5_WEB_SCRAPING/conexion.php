<?php

function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="jbsb92";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}

/*

function conectar(){

    $host="sql307.infinityfree.com";
    $user="if0_34406299";
    $pass="Yu5glWrgzN";

    $bd="if0_34406299_azx_tutoriales";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
    
}

*/

?>