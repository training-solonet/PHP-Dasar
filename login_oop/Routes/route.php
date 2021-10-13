	<?php
require_once '../Config/DbConnection.php';
require_once '../App/User.php';

$koneksi = new crud();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$koneksi->input($_POST['nama'],$_POST['nim'],$_POST['kode_kelas']);
 	header("Location: ../tampil.php");
 	echo "<script>alert('Data berhasil disimpan..')</script>";
 	exit;
 }elseif($aksi == "hapus"){ 	
 	$koneksi->hapus($_GET['id']);
	header("Location: ../tampil.php");
 }elseif($aksi == "update"){
 	$koneksi->update($_POST['id'],$_POST['nama'],$_POST['nim'],$_POST['kode_kelas']);
 	// $edit = [
 	// 	$_POST['nama'],$_POST['nim'],$_POST['kode_kelas']
 	// ];

 	// var_dump($edit);
 	header("Location: ../tampil.php");
 	echo "<script>alert('Data berhasil disimpan..')</script>";	
 }
 ?>