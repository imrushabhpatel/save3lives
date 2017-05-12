<?php

$db_host = "localhost";
$db_username = "root";
$db_pass = "123456";
$db_name = "save3lives";

@mysql_connect ("$dbhost","$db_username","$db_pass") or die ("could not connect to database ");
@mysql_select_db("$db_name") or die ("database not found");

echo "SUCCESFUL"


?>