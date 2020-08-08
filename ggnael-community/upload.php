<?php
include 'includes/config.php';

$fileName = $_FILES['files']['name'];
$tmpName = $_FILES['files']['tmp_name'];
$fileSize = $_FILES["files"]["size"];
$fileType = $_FILES["files"]["type"];

$dirUpload = "img/".$fileName;

if($fileType == "image/jpeg" || $fileType  == "image/png") {
    if($fileSize <= 2000000) {
        if(move_uploaded_file($tmpName, $dirUpload)) {
          // Proses simpan ke Database
          $koneksi = mysqli_connect("localhost","root","","ggnael") or die(mysqli_error());
          $query = "INSERT INTO users(photo) VALUES($fileName)";
          $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
          if($sql) {
               header("location: manage_account?status=uploaded");
          } else {
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='manage_account'>Kembali Ke Form</a>";
          }
        } else {
          echo "Maaf, Gambar gagal untuk diupload.";
          echo "<br><a href='manage_account'>Kembali Ke Form</a>";
        }
    } else {
      echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 2MB";
      echo "<br><a href='manage_account'>Kembali Ke Form</a>";
    }
} else {
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='manage_account'>Kembali Ke Form</a>";
}
?>
