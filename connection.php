<?php

function connection(){
    $host = "localhost";
    $user = "geremy";
    $pass = "yeye1";

    $bd = "yeyeuser";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>