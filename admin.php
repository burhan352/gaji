<?php
if($_POST['submit'])
{
if(($_POST[user] != "hrd") || ($_POST[password] != "sdm"))
if(($_POST[user] != "gaji") || ($_POST[password] != "gaji"))
{
echo "<h2>MAAF PASSWORDNYA SALAH</h2>";
}else{
include('fg.php');
}else{
include('fp.php');
}
}
?>