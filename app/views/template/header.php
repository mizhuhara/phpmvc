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
  <title> <?= $data['judul']; ?> </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">PHPMVC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
          <a class="nav-link" href="<?= BASEURL; ?>/About">About</a>
          <a class="nav-link" href="<?= BASEURL; ?>/Login">Login</a>




        </div>
      </div>
    </div>
  </nav>