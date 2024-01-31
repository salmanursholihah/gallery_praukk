<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Halaman Home</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">sign up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="foto.php">create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="album.php">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">logout</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <h1>Halaman Home</h1>
    <p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p>
</body>
</html>