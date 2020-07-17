<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM tb_bansos WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	while($row = $result->fetch()) {
?>
<form action="saveeditdata.php?id=<?= $row['id']; ?>" method="post" style="width: 200px; height: 200px;">
<h2>Edit Data</h2>
<hr style="width: 260px;">
<div id="ac">
<span>Nama : </span><input type="text" style="width:265px; height:30px;" name="nama" value="<?= $row['nama']; ?>" /><br>
<span>No HP : </span><input type="text" style="width:265px; height:30px;" name="hp" value="<?= $row['hp']; ?>" /><br>
<span>email: </span><input type="text" style="width:265px; height:30px;" name="email" value="<?= $row['email']; ?>" /><br>
<span>jenis: </span><select name="jenis" style="width:265px; height:30px;" value="<?= $row['jenis'] ?>">
	<option value="">Pilih Jenis Alokasi</option>
	<option value="Alat Pelindung Diri">Alat Pelindung Diri</option>
	<option value="Logistik Mahasiswa">Logistik Mahasiswa</option>
	<option value="Sembako Masyarakat">Sembako Masyarakat</option>
	<option value="Hand Sanitizer">Hand Sanitizer</option>
	<option value="Bantuan Kuota Mahasiswa">Bantuan Kuota Mahasiswa</option>
</select><br>
<span>Dana: </span><input type="text" style="width:265px; height:30px;" name="dana" value="<?= $row['dana']; ?>" /><br>
<div style="float:right; margin-right:10px;">
<button style="width:150px; margin-top: 15px;">Save Edit</button>
</div>
</div>
</form>
<?php } ?>