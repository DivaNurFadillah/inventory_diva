<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-three="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link " aria-current="page" href="">barang</a>
        <li class="nav-item">
        <a class="nav-link" href="../jenis//index.php">jenis</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</nav>
<body>
<div class="container">
    <h1><i class="fa-solid fa-square-plus"></i> Tambah Data Inventory Diva</h1>
    <br><br>
        <form action="proses_tambah.php" method="POST">
    <div class="mb-3">
        <label for="" class="form-label">ID Jenis</label>
        <input type="text" class="form-control" name="id_jenis" id="" placeholder="">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nama Jenis</label>
        <input type="text" class="form-control" name="nama_jenis" id="" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="index.php" class= "btn btn-success>kembali ke index</a>
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>