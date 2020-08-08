<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta property="og:title" content="Komunitas GGNAEL" />
    <meta property="og:image" content="img/favicon.png" />
    <meta property="og:description" content="Bergabung Dengan Jutaan Orang..." />
    <meta property="og:site_name" content="GGNAEL" />
    <meta property="og:locale" content="en_GB" />
    <title>Manage <?php echo  $_SESSION["user"]["username"]?></title>
    <link rel="icon" type="images/png" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">GGNAEL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="server/">Discord Server</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bot/">Discord Bot</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="channel/">Youtube Channel</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle" width="30" alt="<?php echo $_SESSION["user"]["username"];?> Profile" src="img/<?php echo $_SESSION['user']['photo'] ?>"><?php echo $_SESSION["user"]["username"]; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="user?user_id=<?php echo $_SESSION["user"]["id"];  ?>">Profile</a>
              <a class="dropdown-item" href="manage_account?user=<?php echo $_SESSION["user"]["username"];?>">Manage Account</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout">Logout</a>
            </div>
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
            <div class="col-md-4">

                <div class="card">
                    <div class="card-body text-center">

                        <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                        <p>Ganti Profile Picture:</p>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                        Pilih file: <input type="file" name="files" />
                        <input  type="submit" name="upload" accept="image/jpeg" accept="image/x-png" value="upload" />
                        </form>
                        <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                        <p><?php echo $_SESSION["user"]["email"] ?></p>
                        <p>Dibuat Pada: <?php echo $_SESSION["user"]["createdAt"] ?></p>
                        <p><a href="user?user_id=<?php echo $_SESSION["user"]["id"] ?>">Back</a></p>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
