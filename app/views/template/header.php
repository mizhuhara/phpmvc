<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- coustem css -->
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
  <!-- bootstrap -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="<?= BASEURL; ?>\css\bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>\css\styleproduk.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title> <?= $data['judul']; ?> </title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container d-flex justify-content-between">
      <a class="navbar-brand" href="<?= BASEURL; ?>"><img src="<?= BASEURL; ?>/img/Logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
          <a class="nav-link" href="<?= BASEURL; ?>/Product">Produk</a>
          <a class="nav-link" href="<?= BASEURL; ?>/About">About</a>
          <a class="nav-link" href="<?= BASEURL; ?>/Login">Login</a>
        </div>
      </div>
    </div>
  </nav>