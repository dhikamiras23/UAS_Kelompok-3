<?php
// configuration
include('../connect.php');

// new data
$id = $_GET['id'];
$a = $_POST['nama'];
$b = $_POST['hp'];
$c = $_POST['email'];
$d = $_POST['jenis'];
$e = $_POST['dana'];
// query
$sql = "UPDATE tb_bansos 
        SET nama=?, hp=?, email=?, jenis=?, dana=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$b,$c,$d,$e,$id));
header("location: index.php");

?>