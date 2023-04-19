<h3>Formulir Gaji PNS Kab Sekadau</h3>

<form action="index.php" method="post">
<input type="submit" name="cetak" value="Keluar" />
</form>

<form action="editgaji.php" method="post">
<input type="submit" name="cetak" value="EDIT" />
</form>

<form action = "hubungfg.php" method = "post" enctype =
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
<p>Gaji Pokok</p>
</td><td width="3">:
</td><td width="400">
<input type="text" name="b" size="35"/>
</td></tr>

<tr><td width="160">
<p>Tunjangan</p>
</td><td width="3">:
</td><td width="400">
<input type="text" name="c" size="35"/>
</td></tr>

<tr><td width="160">
<p>Potongan</p>
</td><td width="3">:
</td><td width="400">
<input type="text" name="d" size="35"/>
</td></tr>

<tr><td width="160">
<p>Tanggal gaji</p>
</td><td width="3">:</td><td><label>
<select name="e" id="e">
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

<select name="f" id="f">
<option>[Bulan]</option>
<option>Januari</option>
<option>Februari</option>
<option>Maret</option>
<option>April</option>
<option>Mei</option>
<option>Juni</option>
<option>Juli</option>
</select>
<select name="g" id="g">
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

<tr><td></td><td></td><td>
<input type="submit" name="submit" value="Masukan"/>
<input type="reset" name="reset" value="Batal"/>
</td></tr>
</table></span>
</form>

<h3>  from Edit Gaji PNS Kab Sekadau</h3>

<form action = "hubungfg.php" method = "post" enctype =
"multipart/form-data">
<span class="sytle70">
<table border="3">

<tr><td width="160">
<p>Bulan</p>
</td><td width="3">:</td><td><label>
<select name="h" id="h">
<option>[Pilih]</option>
<option>Januari</option>
<option>Februari</option>
<option>Maret</option>
<option>April</option>
<option>Mei</option>
<option>Juni</option>
<option>Juli</option>
</select>

<tr><td width="160">
<p>Tahun</p>
</td><td width="3">:</td><td><label>
<select name="i" id="i">
<option>[pilih]</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
</select>

<tr><td></td><td></td><td>
<input type="submit" name="submit" value="Edit Gaji"/>
<input type="reset" name="reset" value="Batal"/>
</td></tr>
</table></span>
</form>

<h3>  from Print data Gaji PNS Kab Sekadau</h3>

<form action = "hubungfg.php" method = "post" enctype =
"multipart/form-data">
<span class="sytle70">
<table border="3">

<tr><td width="160">
<p>Bulan</p>
</td><td width="3">:</td><td><label>
<select name="j" id="j">
<option>[Pilih]</option>
<option>Januari</option>
<option>Februari</option>
<option>Maret</option>
<option>April</option>
<option>Mei</option>
<option>Juni</option>
<option>Juli</option>
</select>

<tr><td width="160">
<p>Tahun</p>
</td><td width="3">:</td><td><label>
<select name="k" id="k">
<option>[pilih]</option>
<option>2001</option>
<option>2002</option>
<option>2003</option>
<option>2004</option>
<option>2005</option>
<option>2006</option>
<option>2007</option>
</select>

<tr><td></td><td></td><td>
<input type="submit" name="submit" value="Print Gaji"/>
<input type="reset" name="reset" value="Batal"/>
</td></tr>
</table></span>
</form>





