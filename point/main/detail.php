<?php 
	session_start();
 ?>
<html>
<head>
	<title>Detail Data Transaksi</title>
	<?php require_once 'auth.php';
	 ?>
</head>
<body>
	
	<center><h1>Detail Data Transaksi Penerimaan <br> Bantuan Sosial Covid19</h1></center>
	<div style=" margin-bottom: 40px; margin-top: 40px; margin-left: 24%;">
	<form action="detail.php" method="get">
		<span><input type="text" name="cari" >
		<button type="submit" value="cari">Cari</button></span>
	</form>
	<?php  
	if (isset($_GET['cari'])) {
		$cari = $_GET['cari'];
	}
	?>
	</div>
	<center>
		<span style="margin-left : 40%;"><a href="tambah.php"><button> Tambah Data </button></a>
			<a href="index.php"><button> Kembali </button></a>
		</span>
	<table border="1" style="margin-top: 10px;" width="700">
	<thead>
		<td>No</td>
		<td>Nama</td>
		<td>No HP</td>
		<td>Email</td>
		<td>Jenis</td>
		<td>Dana</td>
	</thead>
	<tbody>

		<?php
				$a = 1;
				include('../connect.php');
				if (isset($_GET['cari'])) {
					$data = $db->prepare("SELECT * FROM tb_bansos WHERE nama LIKE '%". $cari ."%'");
					$data->execute();
				} else {
					$data = $db->prepare("SELECT * FROM tb_bansos");
					$data->execute();
				}
				while($row = $data->fetch()) {
			?>
			<tr class="record">
			<td><?php echo $a++; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['hp']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['jenis']; ?></td>
			<td><?php echo $row['dana']; ?></td>
			<td><a href="saveedit.php?id=<?= $row['id']; ?>"><button> Edit </button></a>
		<a href="delete.php?id=<?= $row['id']; ?>"><button> Delete </button></a></td>
			<?php
				}
			?>
	</tbody>
	</table>
	</center>
</body>
</html>