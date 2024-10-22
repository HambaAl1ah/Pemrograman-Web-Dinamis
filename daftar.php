<?php
// Memanggil file dbconnect.php
include_once("dbconnect.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['Submit'])) {
    // Variable untuk menampung data $_POST yang dikirimkan melalui form.
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $negara = $_POST['negara'];
    $alamat = $_POST['alamat'];
    $role = $_POST['role'];

    // Syntax untuk menambahkan data ke table pendaftaran
    $result = mysqli_query($conn, "INSERT INTO pendaftaran (email,nama,institusi,negara,alamat,role) VALUES ('$email', '$nama', '$institusi', '$negara', '$alamat', '$role')");

    // Menampilkan pesan jika data berhasil disimpan.
    echo "Data berhasil disimpan. <a href='index.php'>Kembali ke Home</a>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Pendaftaran Seminar </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css">
   </head>
<body>
  <div class="container">
    <div class="title">Pendaftaran Seminar</div>
    <div class="content">
      <form action="daftar.php" name="form1" method="post">
          <div class="user-details">
              <div class="input-box">
                <span class="details">Nama</span>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda" required>
              </div>
        
            <div class="input-box">
              <span class="details">E-Mail</span>
              <input name="email" type="text" id="email" placeholder="Masukkan Email Anda" required>
            </div>

            <div class="input-box">
              <span class="details">Institusi</span>
              <input name="institusi" type="text" id="institusi" placeholder="Masukkan Institusi Anda" required>
            </div>

            <div class="input-box">
              <span class="details">Negara</span>
              <input name="negara" type="text" id="negara" placeholder="Masukkan Negara Anda" required>
            </div>

            <div class="input-box">
              <span class="details">Role ( Panitia / Peserta )</span>
              <input name="role" type="text" id="role" placeholder="Masukkan role Anda" required>
            </div>
            <div class="input-box">
              <br>
            </div>
            <div class="input-box"> 
              <span class="details">Alamat</span>
              <textarea name="alamat" id="alamat"></textarea>
            </div>
          </div>
          <input type="submit" name="Submit" value="Kirim" class="btn btn-success">
          <input type="reset" name="Submit2" value="Batal" class="btn btn-danger">
      </form>
    </div>
  </div>

</body>
</html>
