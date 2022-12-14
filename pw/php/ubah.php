<?php

require 'function.php';

if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

$id =$_GET['id'];

$b = query("SELECT * FROM buku WHERE id = $id");

if (isset($_POST['ubah']) > 0) {
    if (ubah($_POST)) {
        echo "<script>
                alert('data berhasil diubah');
                document.location.href = '../index.php';
                </script>";
    } else {
        echo "<script>
                alert('data gagal diubah');
                </script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Ubah Data</title>
  </head>
  <body>
    <h3>Silakan Ubah Data</h3>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $b['id'] ;?>">
        <ul>
            <li>
                <input type="hidden" name="gambar_lama" value="<?= $b['gambar'] ;?>">
                <label for="gambar">Gambar : </label><br>
                <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                <img src="../img/<?= $b['gambar'] ;?>" width="120" style="display: block;" class="img-preview">
            </li>
            <li>
                <label for="judul" required>Judul : </label><br>
                <input type="text"name="judul" value="<?= $b['judul'] ;?>">
            </li>
            <li>
                <label for="penulis" required>Penulis : </label><br>
                <input type="text"name="penulis" value="<?= $b['penulis'] ;?>">
            </li>
            <li>
                <label for="penerbit" required>Deskripsi : </label><br>
                <input type="text"name="penerbit" value="<?= $b['penerbit'] ;?>">
            </li>
            <br><br>
            <button type="submit" name="ubah">Ubah Data</button>
            <br><br>
            <a href="../index.php">Kembali</a>
            
        </ul>
    </form>

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