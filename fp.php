<h3>Formulir Pegawai PNS Kab Sekadau</h3>

<form action="index.php" method="post">
<input type="submit" name="cetak" value="Keluar" />
</form>

<form action="editpegawai.php" method="post">
<input type="submit" name="cetak" value="EDIT" />
</form>

<form action = "hubungfp.php" method = "post" enctype =
"multipart/form-data">
<span class="sytle70">
<table border="3">

<tr><td width="160">
<p>NIP</p>
</td><td width="3">:
</td><td width="400">
<input type="text" name="a" size="35"/>
</td></tr>

<tr><td width="160">
<p>Nama</p>
</td><td width="3">:
</td><td width="400">
<input type="text" name="b" size="35"/>
</td></tr>

<tr><td width="160">
<p>Tempat Lahir</p>
</td><td width="3">:
</td><td width="400">
<input type="text" name="c" size="35"/>
</td></tr>

<tr><td width="160">
<p>Tanggal Lahir</p>
</td><td width="3">:</td><td><label>
<select name="d" id="d">
<option>[Tanggal]</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>20</option>
<option>30</option>
<option>31</option>
</select>
<select name="e" id="e">
<option>[Bulan]</option>
<option>Januari</option>
<option>Februari</option>
<option>Maret</option>
<option>April</option>
<option>Mei</option>
<option>Juni</option>
<option>Juli</option>
</select>
<select name="f" id="f">
<option>[Tahun]</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
</select>
</label></td></tr>

<tr><td width="160">
<p>Jenis Kelamin</p>
</td><td width="3">:
</td><td width="200">
Pria<input type="radio" name="g" value="Pria"/>
Wanita<input type="radio" name="g" value="Wanita"/>
</td></tr>

<tr><td width="160">
<p>Status</p>
</td><td width="3">:
</td><td width="200">
Menikah<input type="checkbox" name="h" value="Menikah"/>
Belum Menikah<input type="checkbox" name="h" value="Belum Menikah"/>
</td></tr>

<tr><td width="160">
<p>Agama</p>
</td><td width="3">:</td><td><label>
<select name="i" id="i">
<option>[Agama]</option>
<option>Khatolik</option>
<option>Protestan</option>
<option>Hindu</option>
<option>Budha</option>
<option>Khongfucu</option>
<option>Islam</option>
</select></td></tr>

<tr><td width="160">
<p>Usia</p>
</td><td width="3">:
</td><td width="400">
<input type="text" name="j" size="35"/>
</td></tr>

<tr><td width="160">
<p>Alamat</p>
</td><td width="3">:
</td><td width="400">
<input type="text" name="k" size="35"/>
</td></tr>

<tr><td width="160">
<p>Pendidikan Terakhir</p>
</td><td width="3">:</td><td><label>
<select name="l" id="l">
<option>[ Pendidikan Terakhir]</option>
<option>SMA</option>
<option>D1</option>
<option>D3</option>
<option>S1</option>
<option>S2</option>
<option>S3</option>
</select></td></tr>

<tr><td></td><td></td><td>
<input type="submit" name="submit" value="Masukan"/>
<input type="reset" name="reset" value="Batal"/>
</td></tr>
</table></span>
</form>