<?php
require_once '../Config/DbConnection.php';
require_once '../App/User.php';

$koneksi = new crud_kelas();
 
$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$koneksi->input($_POST['nama_kelas']);
 	header("Location: ../tampil_kelas.php");
 }elseif($aksi == "hapus"){ 	
 	$koneksi->hapus($_GET['id_kelas']);
	header("Location: ../tampil_kelas.php");
 }elseif($aksi == "update"){
 	$koneksi->update($_POST['id_kelas'],$_POST['nama_kelas']);
 	// $edit = [
 	// 	$_POST['nama'],$_POST['nim'],$_POST['kode_kelas']
 	// ];

 	// var_dump($edit);
 	header("Location: ../tampil_kelas.php");
 }
 ?>