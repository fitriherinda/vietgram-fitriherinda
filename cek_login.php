<?php
	
session_start();

include 'koneksi.php';

$username = $_GET['username'];
$password = $_GET['password'];

$data = mysqli_query($koneksi, "select * from admin
	where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$_SESSION['id'] = $row['id'];
	header("location:feed.php");
}else{
	header("location:index.php?pesan=gagal");
}

?>