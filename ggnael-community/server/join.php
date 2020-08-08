<?php
 $koneksi = mysqli_connect("localhost","root","","ggnael") or die(mysqli_error());
 function invitelink($koneksi)
 {
   $sql = "SELECT server_invite from discordserver";
   $query = mysqli_query($koneksi, $sql);
   while($data = mysqli_fetch_array($query)){
      ?>
     <a href="<?php $data['server_invite']; ?>">Join</a>
     <?php
   }
 }
 //execute the function
 invitelink($koneksi);
?>
