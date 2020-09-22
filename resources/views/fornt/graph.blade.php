<?php

$DB_HOST = "127.0.0.1";
$DB_USERNAME = "root";
$DB_PASSWORD = " ";
$DB_NAME = "FOG";

$mysqli = new mysqli("$DB_HOST", "$DB_PASSWORD", "$DB_USERNAME", "$DB_HOST");

if(!$mysqli){
        die("Connection failed: ".$mysqli->error);
    }









// header('Content-Type: application/json');

// define('DB_HOST','127.0.0.1');
// define('DB_USERNAME','root');
// define('DB_USERNAME','');
// define('DB_NAME','FOG');

// $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// if(!$mysqli){
//     die("Connection failed: ".$mysqli->error);
// }

// $query = sprintf("SELECT rid, Hiper, Loper, Plusrate FROM Records");

// $result = $mysqli->query($query);

// $data = array();

// foreach($result as $row){
//     $data[] = $row;
// }

// $result->close();
// $mysqli->close();

// print json_encode($data);
?>