<?php
	function conexion(){
	$host = "host=containers-us-west-41.railway.app";
	$port = "port=7664";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=CxtNAoZtzSmzZvw5JhOY";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>