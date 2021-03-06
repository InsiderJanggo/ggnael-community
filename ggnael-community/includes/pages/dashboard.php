<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="Komunitas GGNAEL" />
    <meta property="og:image" content="img/favicon.png" />
    <meta property="og:description" content="Bergabung Dengan Jutaan Orang..." />
    <meta property="og:site_name" content="GGNAEL" />
    <meta property="og:locale" content="en_GB" />
    <title><?php echo  $_SESSION["user"]["username"]?></title>
    <link rel="icon" href="img/<?php echo $_SESSION['user']['photo'] ?>"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style media="screen">
    .modal-notify .modal-header {
      border-radius: 3px 3px 0 0;
    }
    .modal-notify .modal-content {
      border-radius: 3px;
    }
    </style>
</head>
<body class="bg-light">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="#">
    <img src="img/favicon.png" width="30" height="30" alt="" loading="lazy">
    </a>
    <a class="navbar-brand" href="#">GGNAEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
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

                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>
                    <p><a href="manage_account?user=<?php echo  $_SESSION["user"]["username"] ?>">Manage Account</a></p>
                    <p>Dibuat Pada: <?php echo $_SESSION["user"]["createdAt"] ?></p>
                    <p><a href="logout">Logout</a></p>
                </div>
            </div>


        </div>


        <div class="col-md-8">

            <form action="upload-status.php" method="post" />
                <div class="form-group">
                  <!--class="btn btn-default btn-rounded"-->
                    <textarea  data-toggle="modal" data-target="#orangeModalSubscription" class="form-control" placeholder="Apa yang kamu pikirkan <?php echo $_SESSION["user"]["username"]; ?>?"></textarea>
                </div>
            </form>
            <div class="modal fade" id="orangeModalSubscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-warning" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header text-center">
        <h4 class="modal-title white-text w-100 font-weight-bold py-2">Subscribe</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="form3" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form3">Your name</label>
        </div>

        <div class="md-form">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="form2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="form2">Your email</label>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-outline-warning waves-effect">Send <i class="fas fa-paper-plane-o ml-1"></i></a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

            <?php for($i=0; $i < 6; $i++){ ?>
            <div class="card mb-3">
                <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis veritatis nemo ad recusandae labore nihil iure qui eum consequatur, officiis facere quis sunt tempora impedit ullam reprehenderit facilis ex amet!
                </div>
            </div>
            <?php } ?>

        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
