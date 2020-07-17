<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM tb_bansos WHERE id= :id");
	$result->bindParam(':id', $id);
	$result->execute();
	header("location: detail.php");
?>