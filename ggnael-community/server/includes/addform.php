<?php
require_once("../includes/config.php");

if(isset($_POST['add'])){
  // filter data yang diinputkan
  $name = filter_input(INPUT_POST, 'servername', FILTER_SANITIZE_STRING);
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $invitelink = filter_input(INPUT_POST, 'invitelink', FILTER_SANITIZE_STRING);

  // menyiapkan query
  $sql = "INSERT INTO discordserver (server_name, owner, server_invite)
          VALUES (:servername, :username, :invitelink)";
  $stmt = $db->prepare($sql);

  // bind parameter ke query
  $params = array(
      ":servername" => $name,
      ":username" => $username,
      ":invitelink" => $invitelink,
  );

  // eksekusi query untuk menyimpan ke database
  $saved = $stmt->execute($params);

  // jika query simpan berhasil, maka user sudah terdaftar
  // maka alihkan ke halaman login
  if($saved) header("Location: ../server/");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Server | Komunitas GGNAEL</title>
    <link rel="icon" type="images/png" href="../img/favicon.png"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">GGNAEL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../server/">Discord Server</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../bot/">Discord Bot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../channel/">Youtube Channel</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION["user"]["username"]; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../user?user_id=<?php echo $_SESSION["user"]["id"];  ?>">Profile</a>
              <a class="dropdown-item" href="../manage_account?user=<?php echo $_SESSION["user"]["username"];?>">Manage Account</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../logout">Logout</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add">Add Server</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

            <p>&larr; <a href="../server/">Back</a>

            <h4>Tambah Server Kamu Sekarang.</h4>

            <form action="" method="POST">

                <div class="form-group">
                    <label for="servername">Nama Server</label>
                    <input class="form-control" type="text" name="servername" placeholder="Nama Server" />
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" />
                </div>

                <div class="form-group">
                    <label for="invitelink">Invite Link</label>
                    <input class="form-control" type="text" name="invitelink" placeholder="Invite Link" />
                </div>
                <input type="submit" class="btn btn-success btn-block" name="add" value="Daftar" />

            </form>

            </div>

            <div class="col-md-6">
                <img class="img img-responsive" src="../img/TJPball.png" />
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
