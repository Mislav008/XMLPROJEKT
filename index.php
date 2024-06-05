<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'o_nama';
?>

<!doctype html>
<html lang="hr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Prodaja Mobitela</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #ffffff;
      color: #000000;
    }
    .navbar, .footer {
      background-color: #800020;
      color: #ffffff;
    }
    .btn-primary {
      background-color: #800020;
      border: none;
    }
    .btn-primary:hover {
      background-color: #660018;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="?page=o_nama">WEB-shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="?page=o_nama">O nama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=u_ponudi">U ponudi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=kontakt">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-5">
    <?php
    if ($page == 'o_nama') {
      include 'o_nama.php';
    } elseif ($page == 'u_ponudi') {
      include 'u_ponudi.php';
    } elseif ($page == 'kontakt') {
      include 'kontakt.php';
    } else {
      include 'o_nama.php';
    }
    ?>
  </div>

  <div class="footer text-center py-3 mt-5">
    &copy; 2024 Prodaja Mobitela Mislav Vonic
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
