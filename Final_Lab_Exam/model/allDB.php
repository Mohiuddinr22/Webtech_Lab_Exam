<?php
function getConnection(){
    $host = "localhost";
    $root = "root";
    $pass = "";
    $dbName = "school";
    $con = new mysqli($host, $root, $pass, $dbName);
    return $con;
}

?>