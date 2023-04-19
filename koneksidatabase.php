<?php
$host="localhost";
$user="root";
$pass="";
$db_name="pns";
$connection=@mysql_connect("$host","$user","$pass","$db_name") or
die(mysql_error());
$db=mysql_select_db($db_name,$connection) or die(mysql_error());
?>