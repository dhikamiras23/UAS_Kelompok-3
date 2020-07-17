<?php
session_start();
include('../connect.php');
$a = $_POST['nama'];
$b = $_POST['hp'];
$c = $_POST['email'];
$d = $_POST['jenis'];
$e = $_POST['dana'];
// query
$sql = "INSERT INTO tb_bansos (nama,hp,email,jenis,dana) VALUES (:a,:b,:c,:d,:e)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e));
header("location: index.php");


?>