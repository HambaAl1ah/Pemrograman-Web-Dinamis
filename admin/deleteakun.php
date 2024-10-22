<?php
// mengambil file dbconnect.php
include_once("../dbconnect.php");

// mengambil id dari url
$userid = $_GET['userid'];

// Syntax untuk menghapus data berdasarkan id
$result = mysqli_query($conn, "DELETE FROM login where  userid ='$userid'");

// Setelah berhasil dihapus redirect ke index.php
header("Location:index.php");
?>