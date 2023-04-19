<form action="fp.php" method="post">
<input type="submit" name="cetak" value="Keluar" />
</form>

<?php
include "koneksiDatabase.php";
$op = $_GET['op'];
if ($op == "delete")
{
$no = $_GET['no'];
$query = "DELETE FROM pegawai WHERE no = '$no'";
$hasil = mysql_query($query);
}
?>

<?php // menampilkan data yang sudah di input dlm bentuk tabel
include "koneksiDatabase.php";
$warnaGenap = "#BBBBBB"; // warna abu-abu
$warnaGanjil = "#f67297"; // warna putih
$warnaHeading = "#eef03e"; // warna merah untuk heading tabel
// bagian ini digunakan untuk menampilkan semua data
$no = 1;
$query = "SELECT * FROM pegawai";
$hasil = mysql_query($query);
echo "<table border='2'>";
echo "<tr bgcolor='".$warnaHeading."'>
<td>Nomor</td>
<td>NIP</td>
<td>Nama</td>
<td>Tempat Lahir</td>
<td>Tanggal</td>
<td>Bulan</td>
<td>Tahun</td>
<td>Kelamin</td>
<td>Status</td>
<td>Agama</td>
<td>Usia</td>
<td>Alamat</td>
<td>Pendidikan Terakhir</td>
<td>Lakukan</td>
<td>Kerjakan</td>
</tr>";
$counter = 1;
while ($data = mysql_fetch_array($hasil))
{if ($counter % 2 == 0) $warna = $warnaGenap;
else $warna = $warnaGanjil;
echo "<tr bgcolor='".$warna."'>";
echo "<td>".$no."</td>";
echo "<td>".$data['a']."</td>";
echo "<td>".$data['b']."</td>";
echo "<td>".$data['c']."</td>";
echo "<td>".$data['d']."</td>";
echo "<td>".$data['e']."</td>";
echo "<td>".$data['f']."</td>";
echo "<td>".$data['g']."</td>";
echo "<td>".$data['h']."</td>";
echo "<td>".$data['i']."</td>";
echo "<td>".$data['j']."</td>";
echo "<td>".$data['k']."</td>";
echo "<td>".$data['l']."</td>";

echo "<td><a href=\"".$_SERVER['PHP_SELF'].
"?op=edit&no=".$data['no']."\">Betulkan</a></td>";
echo "<td><a href=\"".$_SERVER['PHP_SELF']."?op=delete&no=".$data['no']."\"
onclick=\"return konfirmasi('".$data['no']."')\">Hapus</a></td>";
$counter++; // menambah counter
$no++;
}
echo "</table>";
?>

<?php
include "koneksidatabase.php";
$op = $_GET['op'];
if ($op == "edit")
{
// proses untuk menampilkan data yang akan diedit pada form
$no = $_GET['no'];
$query = "SELECT * FROM pegawai WHERE no = '$no'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
echo "<form method=\"post\" action=\"".$_SERVER['PHP_SELF'].
"?op=update\">";
echo "<table border=\"1\">";
echo "<tr>
<td>Antrian Database</td>
<td><input type=\"text\" name=\"no\"
value=\"".$data['no']."\"></td>
</tr>";echo "<tr>
<td>NIP</td>
<td><input type=\"text\" name=\"a\"
value=\"".$data['a']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";
echo "<tr>
<td>Nama</td>
<td><input type=\"text\" name=\"b\"
value=\"".$data['b']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";
echo "<tr>
<td>Tempat Lahir</td>
<td><input type=\"text\" name=\"c\"
value=\"".$data['c']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";
echo "<tr>
<td>Tanggal Lahir</td>
<td><input type=\"text\" name=\"d\"
value=\"".$data['d']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";
echo "<tr>
<td>Bulan Lahir</td>
<td><input type=\"text\" name=\"e\"
value=\"".$data['e']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";
echo "<tr>
<td>Tahun Lahir</td>
<td><input type=\"text\" name=\"f\"value=\"".$data['f']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";
echo "<tr>
<td>Jenis Kelamin</td>
<td><input type=\"text\" name=\"g\"
value=\"".$data['g']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";

echo "<tr>
<td>Status</td>
<td><input type=\"text\" name=\"h\"
value=\"".$data['h']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";

echo "<tr>
<td>Agama</td>
<td><input type=\"text\" name=\"i\"
value=\"".$data['i']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";

echo "<tr>
<td>Usia</td>
<td><input type=\"text\" name=\"j\"
value=\"".$data['j']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";

echo "<tr>
<td>Alamat</td>
<td><input type=\"text\" name=\"k\"
value=\"".$data['k']."\"></td></tr>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";

echo "<tr>
<td>Alamat</td>
<td><input type=\"text\" name=\"l\"
value=\"".$data['l']."\"></td></tr>";
echo "</table>";
echo "<input type=\"hidden\" name=\"ubahdatagaji\"
value=\"".$data['no']."\">";

echo "<input type=\"submit\" name=\"submit\"
value=\"Simpan Perubahan\">";
echo "</form>";
}
else if ($op == "update")
{
// proses untuk updating data setelah diedit
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];
$h = $_POST['f'];
$i = $_POST['i'];
$j = $_POST['j'];
$k = $_POST['k'];
$l = $_POST['l'];

$ubahdatagaji = $_POST['ubahdatagaji'];
$query = "UPDATE pegawai SET a = '$a', b = '$b', c = '$c', d = '$d', e = '$e', f = '$f', g = '$g' ,
h = '$h' , i = '$i', j = '$j', k = '$k', l = '$l' WHERE no = '$ubahdatagaji'";
$hasil = mysql_query($query);
if ($hasil) echo "<p>Proses Update Sukses</p>";
else echo "<p>Proses Update Gagal</p>";
}
?>