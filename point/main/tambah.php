<div><a href="detail.php"><button> Kembali </button></a>
<form action="savedata.php" method="post" style="width: 200px; height: 200px;">
<h2>Tambah Data</h2>
<hr style="width: 260px;">
<div id="ac">
<span>Nama : </span><input type="text" style="width:265px; height:30px;" name="nama" required/><br>
<span>No HP : </span><input type="text" style="width:265px; height:30px;" name="hp" /><br>
<span>email: </span><input type="text" style="width:265px; height:30px;" name="email" /><br>
<span>jenis: </span><select name="jenis" style="width:265px; height:30px;">
	<option value="">Pilih Jenis Alokasi</option>
	<option value="Alat Pelindung Diri">Alat Pelindung Diri</option>
	<option value="Logistik Mahasiswa">Logistik Mahasiswa</option>
	<option value="Sembako Masyarakat">Sembako Masyarakat</option>
	<option value="Hand Sanitizer">Hand Sanitizer</option>
	<option value="Bantuan Kuota Mahasiswa">Bantuan Kuota Mahasiswa</option>
</select><br>
<span>Dana: </span><input type="text" style="width:265px; height:30px;" name="dana" /><br>
<div style="float:right; margin-right:10px;">
<button style="width:150px; margin-top: 15px;">Save</button>
</div>
</div>
</form></div>