<?php
$koneksi = mysqli_connect("localhost","root","","ggnael") or die(mysqli_error());
require_once("includes/config.php");

function upload($koneksi)
{
  if(isset($_POST['upload_status'])){
  // menyiapkan query
  $sql = "INSERT INTO upload (header, content, postedBy)
          VALUES (:header, :content, :user)";
  $stmt = $db->prepare($sql);
  }
}

function delete($koneksi) {

}

function edit($koneksi) {

}

function display($koneksi) {
  $sql = "SELECT * from upload";
  $query = mysqli_query($koneksi, $sql);
}

function like($koneksi)
{
  // code...
}
function dislike($koneksi) {

}

//upload db_table
/*
upload_id
header
content
liked	disliked
postedBy
createdAt
*/
?>
