<?php
require 'php/function.php';

$buku = query("SELECT * FROM buku");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

    <style>
        img {
            height: 150px;
        }
    </style>

    <title></title>
  </head>
  <body>

    <div class="container">
      <h2>Daftar Buku</h2>
    </div>
  

<div>
  <a href="php/tambah.php"><button class="tambah">Tambah data disini!!</button></a>
</div>

<div class="container">
    <table class="table" border = 1 cellpadding = "10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
        </tr>

        <?php if(empty($buku)):?>
            <tr>
                <td colspan="4"><p style="color:red; font-style:italic;">data buku tidak ditemukan!</p></td>
            </tr>
        <?php endif;?>
        
        <?php $i =1; ?>
        <?php foreach($buku as $b): ?>

        <tr>
            <td><?= $i++ ;?></td>
            <td>
              <a href="../hapus.php?id=<?= $b['id'] ;?>" onclick="return comfirm('apakah anda yakin??;')"><button class="hapus">Hapus</button></a>
              <a href="../ubah.php?id=<?= $b['id'] ;?>"><button class="ubah">Ubah</button></a>
            </td>
            <td><img src="img/<?= $b['gambar'] ;?>" alt=""></td>
            <td><?= $b['judul'] ;?></td>
            <td><?= $b['penulis'];?></td>
            <td><?= $b['penerbit'];?></td>
        </tr>

        <?php endforeach;?>
    </table>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>