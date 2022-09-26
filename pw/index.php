<?php
require 'php/function.php';

$buku = query("SELECT * FROM buku");
?>
<html>
<div class="container">
    <h2>Daftar Buku</h2>
</div>

<div class="container">
    <table class="table" border = 1 cellpadding = "10" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Gambar</th>
        </tr>

        <?php if(empty($buku)):?>
            <tr>
                <td colspan="4"><p style="color:red; font-style:italic;">data anggota tidak ditemukan!</p></td>
            </tr>
        <?php endif;?>
        
        <?php $i =1; ?>
        <?php foreach($buku as $b): ?>

        <tr>
            <td><?= $i++ ;?></td>
            <td><img src="assets/img/<?= $b['gambar'] ;?>" alt=""></td>
            <td><a class="detail" href="php/detail1.php?id=<?= $b['id'];?>"><?= $b['judul'] ;?></a></td>
            <td><?= $b['penulis'];?></td>
            <td><?= $b['penerbit'];?> </td>
        </tr>

        <?php endforeach;?>
    </table>
</div>
</html>