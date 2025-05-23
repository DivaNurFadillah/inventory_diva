<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
        <li class="nav-item active">
        <a class="nav-link " aria-current="page" href="../barang/index.php">barang</a>
        <li class="nav-item">
        <a class="nav-link" href="#">jenis</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h1>Data Inventory Diva</h1>
    <br><br>
    <a href="view_tambah.php" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i> Tambah Data Jenis Baru</a>
    <br><br>
    <table class="table table-success table-danger">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Jenis</th>
      <th scope="col">Nama Jenis</th>
      <th>Aksi</th>
    </tr>
    </thead>
  <tbody>
    <?php
        include '../../config/koneksi.php';
        $query = mysqli_query($conn, "SELECT *FROM jenis");
        if(mysqli_num_rows($query)> 0){
            $no=1;
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $result['id_jenis']?></td>
                    <td><?php echo $result['nama_jenis']?></td>
                    <td>
                    <a class="class=btn btn-warning" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></a>
                    <a href="view_edit.php?id=<?php echo $result['id_jenis'];?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                    <a href="proses_hapus.php?id=<?php echo $result['id_jenis'];?>"
                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini')" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Hapus</a>
                </tr>
                <?php
                $no++;
            }
        }else{
            echo "belum ada data";
        }
    ?>
</tbody>
</table>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>