<?php include 'config/app.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Library</title>
    <style>
        .navbar-brand, .nav-link, .nav-log {
            color: white;
        }
        #sidebar {
            width: 100%;
            height: 100vh;
            position: fixed;
            background-color: #777B7E;
        }
        .sidebar .nav-item {
            display: flex;
            align-items: center;
            padding: 10px;
        }
        .sidebar .nav-link {
            margin-left: 10px;
            color: white;
        }

        .konten {
            margin-left: 260px; 
            padding: 20px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" >
        <img src="foto/library.png" alt="Logo" class="img-fluid" style="max-width: 40px; margin-right: 10px;">
            Library
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav">
            <a class="nav-link float-end" aria-current="page" href="login.php">Logout</a>
        </div>
    </div>
</nav>
<div class=" text-white p-3" id="sidebar" style="width: 250px;">
    <ul class="sidebar flex-column">
        <li class="nav-item">
            <img src="foto/dashboard.svg" alt="Logo" class="img-fluid" style="max-width: 20px;">
            <a href="beranda.php" class="nav-link text-white">Dashboard</a>
        </li>
        <li class="nav-item">
            <img src="foto/bookbar.svg" alt="Logo" class="img-fluid" style="max-width: 20px;">
            <a href="databuku.php" class="nav-link text-white">Data Buku</a>
        </li>
        <li class="nav-item">
            <img src="foto/add.svg" alt="Logo" class="img-fluid" style="max-width: 20px;">
            <a href="tambahbuku.php" class="nav-link text-white">Tambah Buku</a>
        </li>
    
</div>
</body>

</html>
