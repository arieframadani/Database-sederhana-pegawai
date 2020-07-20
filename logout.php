<?php 
session_start();
include 'koneksi.php';
$username = $_SESSION['username'];
if (isset($username))
{
session_destroy();
echo '<script>alert("Anda Telah Logout !!!");
window.location.href="index.html"</script>';
}
?>