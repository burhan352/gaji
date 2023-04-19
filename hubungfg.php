<?php
include('koneksidatabase.php');
$periksanorek = "SELECT * FROM gaji where a='$_POST[a]'";
$periksaisitabel = mysql_query ($periksanorek);
$hasilperiksa = mysql_num_rows ($periksaisitabel);
if ($hasilperiksa != '$_POST[a]' )
{
echo "<h1><blink> NIP Sudah Ada </blink> Silakan Masukan NIP Yang Lain</h1>";
Include('fg.php');
}else{
$a=$_REQUEST['a'];
$b=$_REQUEST['b'];
$c=$_REQUEST['c'];
$d=$_REQUEST['d'];
$e=$_REQUEST['e'];
$f=$_REQUEST['f'];
$g=$_REQUEST['g'];
$h=$_REQUEST['h'];
$i=$_REQUEST['i'];
$j=$_REQUEST['j'];
$k=$_REQUEST['k'];
$l=$_REQUEST['l'];

$sql="Insert into gaji(a,b,c,d,e,f,g) Values('$a', '$b', '$c', '$d', '$e', '$f', '$g')";
mysql_query($sql);
Include('fg.php');
}
?>