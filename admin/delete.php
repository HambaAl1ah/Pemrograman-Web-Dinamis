<?php
// mengambil file dbconnect.php
include_once("../dbconnect.php");

// mengambil id dari url
$id = $_GET['id'];

// Syntax untuk menghapus data berdasarkan id
$result = mysqli_query($conn, "DELETE FROM pendaftaran where  id ='$id'");

// Setelah berhasil dihapus redirect ke index.php
header("Location:index.php");
?>