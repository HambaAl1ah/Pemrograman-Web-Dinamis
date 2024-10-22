<?php
// Memanggil file koneksi.php
include_once("dbconnect.php");

// Perkondisian untuk mengecek apakah tombol submit sudah ditekan.
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $institusi = $_POST['institusi'];
    $negara = $_POST['negara'];
    $alamat = $_POST['alamat'];

    // Syntax untuk mengupdate data user berdasarkan id
    $result = mysqli_query($conn, "UPDATE pendaftaran SET email = '$email',nama = '$nama',institusi = '$institusi',negara = '$negara',alamat = '$alamat' where id = '$id' ");

    // Redirect ke index.php
    header("Location: index.php");
}
?>
<?php
// Menampilkan data berdasarkan data yang kita pilih.

// Mengambil id dari url
$id = $_GET['id'];

// Syntax untuk mengambil data berdasarkan id
$result = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id='$id'");
while ($user_data = mysqli_fetch_array($result)) {
    $email = $user_data['email'];
    $nama = $user_data['nama'];
    $institusi = $user_data['institusi'];
    $negara = $user_data['negara'];
    $alamat = $user_data['alamat'];
    $role = $user_data['role'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title> Edit Data Seminar </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/bootstrap.min.css">
   </head>
<body>
  <div class="container">
    <div class="title">Edit Data Seminar</div>
    <div class="content">
      <form action="edit.php" name="update_pendaftaran" method="post">
          <div class="user-details">
              <div class="input-box">
                <span class="details">Nama</span>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda" value=<?php echo $nama; ?>>
              </div>
        
            <div class="input-box">
              <span class="details">E-Mail</span>
              <input name="email" type="text" id="email" placeholder="Masukkan Email Anda" value=<?php echo $email; ?>>
            </div>

            <div class="input-box">
              <span class="details">Institusi</span>
              <input name="institusi" type="text" id="institusi" placeholder="Masukkan Institusi Anda" value=<?php echo $institusi; ?>>
            </div>

            <div class="input-box">
              <span class="details">Negara</span>
              <input name="negara" type="text" id="negara" placeholder="Masukkan Negara Anda" value=<?php echo $negara; ?>>
            </div>

            <div class="input-box">
              <span class="details">Role ( Panitia / Peserta )</span>
              <input name="role" type="text" id="role" placeholder="Masukkan role Anda" value=<?php echo $role; ?>>
            </div>
            <div class="input-box">
              <br>
            </div>
            <div class="input-box"> 
              <span class="details">Alamat</span>
              <input name="alamat" type="text" id="alamat" placeholder="Masukkan alamat Anda" value=<?php echo $alamat; ?>>
            </div>
          </div>
          <td><input type="hidden" name="id" value=<?php echo $id ?>></td>
          <input type="submit" name="update" value="Update" class= "btn btn-success">
      </form>
    </div>
  </div>

</body>
</html>
