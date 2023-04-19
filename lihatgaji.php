<form action="index.php" method="post">
<input type="submit" name="cetak" value="Kembali" />
</form>

<?php // menampilkan data dari tabel
include "koneksiDatabase.php";
$warnaGenap = "#BBBBBB"; // warna abu-abu
$warnaGanjil = "#FFFFFF"; // warna putih
$warnaHeading = "#FF5555"; // warna merah untuk heading tabel
// bagian ini digunakan untuk menampilkan semua data
if(($_POST['a'] != "") || ($_POST['b'] != "")){
$no = 1;
$query = " update gaji set g = $_POST[gantipin] where a='$_POST[a]'";
$hasil=mysql_query($query);
$query = " update gaji set b = b + $_POST[bayar] where a='$_POST[rekening]'";
$hasil=mysql_query($query);
$query = " update gaji set c = c + $_POST[bayar] where a='$_POST[a]' AND
g='$_POST[b]'";
$hasil=mysql_query($query);
$query = "SELECT * FROM gaji where a='$_POST[a]' AND g='$_POST[b]'";
$hasil = mysql_query($query);
echo "<table border='1'>";
echo "<tr bgcolor='".$warnaHeading."'>
<td>No</td>
<td>NIP</td>
<td>Nomor PIN</td>
<td>Debet</td>
<td>Kredit</td>
<td>Tanggal</td>
<td>Bulan</td>
<td>Tahun</td>
<td>Saldo</td>
<td>Jumlah Transakasi</td>
<td>Transaksi</td>
<td>Rekening Tujuan</td>
</tr>";

$counter = 1;
while ($data = mysql_fetch_array($hasil))
{
if ($counter % 2 == 0) $warna = $warnaGenap;
else $warna = $warnaGanjil;
echo "<tr bgcolor='".$warna."'>";
echo "<td>".$no."</td>";
echo "<td>".$data['a']."</td>";
echo "<td>".$data['g']."</td>";

$b = number_format($data[b],0,",",".");//merubah format Uang
echo "<td>Rp. ".$b." ,-</td>";

$c = number_format($data[c],0,",",".");//merubah format Uang
echo "<td>Rp. ".$c." ,-</td>";

echo "<td>".$data['d']."</td>";
echo "<td>".$data['e']."</td>";
echo "<td>".$data['f']."</td>";

$saldo = $data[b] - $data[c];

$saldo = number_format($saldo,0,",",".");
echo "<td>Rp. ".$saldo." ,-</td>";

$_POST[bayar] = number_format($_POST[bayar],0,",",".");//merubah format Uang
echo "<td>Rp. ".$_POST[bayar]." ,-</td>";

echo "<td>".$_POST[tagihan]."</td>";

echo "<td>".$_POST[rekening]."</td>";

$counter++; // menambah counter
$no++;
}
}else{
echo " norek atau pin belum di isi";
include ('index.php') ;
}
echo "</table>";
?>

<h3>Fasilitas Transakasi Perbankan</h3>
<form action="lihatnasabah.php" method="post" enctype="multipart/form-data">
<span class="sytle70"><table border="0">
<tr><td width="160">
<p>Nomor Rekening Anda</p>
</td><td width="3">:
</td><td width="200">
<input type="text" name="norek" size="35"/></td></tr>
<tr><td width="160">
<p>Nomor PIN Anda</p>
</td><td width="3">:
</td><td width="200">
<input type="text" name="pin" size="35"/></td></tr>
<tr><td width="160">
<p>Jumlah Bayar</p>
</td><td width="3">:</td><td width="200">
<input type="text" name="bayar" size="35"/></td></tr>
<tr><td>BAYAR Tagihan</td><td>:</td><td><label>
<select name="tagihan" id="tagihan">
<option>[Pilih BAYAR]</option>
<option>PDAM</option>
<option>PLN</option>
<option>TELKOM</option>
<option>speedy</option>
<option>TRANSFER</option>
<option>Isi Pulsa IM3</option>
<option>Tokopedia</option>
<option>Shopee</option>
<option>Bakso Nasib</option>

</select>
</label></td></tr>
<tr><td width="160">
<p>Rekening Tujuan</p>
</td><td width="3">:
</td><td width="200">
<input type="text" name="rekening" size="35"/></td></tr><tr><td></td><td></td><td>
<input type="submit" name="submit" value="Bayar" />
<input type="reset" name="reset" value="Batal" />
</td></tr>
</table></span>
</form>

<h3>Fasilitas Ganti PIN</h3>
<form action="lihatnasabah.php" method="post" enctype="multipart/form-data">
<span class="sytle70"><table border="0">
<tr><td width="160">
<p>Nomor Rekening Anda</p>
</td><td width="3">:
</td><td width="200">
<input type="text" name="norek" size="35"/></td></tr>
<tr><td width="160">
<p>Nomor PIN Lama</p>
</td><td width="3">:
</td><td width="200">
<input type="text" name="pin" size="35"/></td></tr>
<tr><td width="160">
<p>Nomor PIN BARU</p>
</td><td width="3">:
</td><td width="200"><input type="text" name="gantipin" size="35"/></td></tr>
<tr><td></td><td></td><td>
<input type="submit" name="submit" value="Ganti PIN" />
<input type="reset" name="reset" value="Batal" />
</td></tr>
</table></span>
</form>
<br>
<h3>Nomor Rekening ( PLN ) Listrik : 123451111</h3>
<h3>Nomor Rekening ( PDAM ) Air : 123451112</h3>
<h3>Nomor Rekening ( Telkom ) Telpon : 123451113</h3>
<h3>Nomor Rekening ( shopee ) Internet: 080808</h3>
<h3>Nomor Rekening ( Bakso Nasib ) Jajanan Lokal: 101010</h3>
<h3>Nomor Rekening ( Tokopedia ) E-Commerce :  	12345678</h3>
<br />