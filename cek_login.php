<?php 
session_start();
require "koneksi.php";

	$username 	= $_REQUEST['username'];
	$password	= $_REQUEST['password'];

	$query = mysqli_query($conn, "SELECT * FROM tbuser WHERE username='$username'");
	$data = mysqli_fetch_array($query);

	if($data['username'] != $username){
		$_SESSION['username'] = $username;
		?><script>window.location="login.php?m=username"; </script><?php
	}else if($data['username'] == $username AND $data['password']!=$password){
		?><script>window.location="login.php?m=password"; </script><?php
	}else if($data['username'] == $username AND $data['password']==$password){
		$_SESSION['username'] = $username;
		?><script>window.location="admin/index.php"; </script><?php
	}			
?>