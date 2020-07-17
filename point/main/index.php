<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Penerimaan Bantuan Sosial Covid19</title>
	<?php 
	require_once 'auth.php';
	date_default_timezone_set('Asia/jakarta');
	$tgl = date("d F Y");
	$wkt = date("H:i");
	?>
</head>
<body>
	<center><h1>Rekapitulasi Penerimaan Bantuan Sosial Covid19</h1></center>
	<center><h2>Sampai dengan <?= $tgl ?>, Pukul <?= $wkt ?> WIB </h2></center>
	<br>
	<br>
	<div style="margin-left: 70%; margin-bottom: 10px;">
		<a href="cetak.php"><button> Print Data </button></a>
		<a href="detail.php"><button> Detail </button></a>
	</div>
	<center>
	<table border="1" width="800" align="center">
		<thead>
			<td>NO</td>
			<td>Alokasi</td>
			<td>Jumlah Transaksi</td>
			<td>Jumlah Dana</td>
		</thead>
		<tbody>
			<?php
				$a = 1;
				include('../connect.php');
				$result = $db->prepare("SELECT jenis,sum(dana) AS dan,sum(sty) AS jumlah FROM tb_bansos GROUP BY jenis DESC");
				$result->execute();
				for($i=0; $row = $result->fetch(); $i++){
			?>
			<tr class="record">
			<td><?php echo $a++; ?></td>
			<td><?php echo $row['jenis']; ?></td>
			<td><?php echo $row['jumlah']; ?></td>
			<td><?php echo $row['dan']; ?></td>
			<?php
				}
			?>
		</tbody>
	</table>
	</center>
</body>
</html>