<?php
header('Content-Type: application/jsonrequest');

$json[]="VALUE";  //CONSTANT "VALUE"
$json[]=@(string)$_GET['tag'];    //name of requested tag
$json[]=time();   //value of requested tag

echo json_encode($json);
?>