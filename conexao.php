<?php

$host = "<database url>";
$usuario = "<user>";
$senha = "<senha>";
$bd = "<database name>";

$info =  array('Database'=>$bd, 'UID'=>$usuario, 'PWD'=>$senha);
$conn = sqlsrv_connect($host,$info);

?>
