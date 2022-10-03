<?php
function koneksi(){
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn, "praktikum_web");

    return $conn;
}

function query($query){
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    
    return $rows;
}

function upload(){
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    if ($error == 4) {
        return 'no-image.jpg';
    }

    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert ('file harus berupa jpg, jpeg, png, atau jfif');
                </script> ";
        return false;
    }

    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert ('file yang and pilih bukan gambar');
                </script> ";
        return false;
    }

    if ($ukuran_file > 10000000) {
        echo "<script>
                alert ('ukuran file terlalu besar');
                </script> ";
        return false;
    }

    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'img/' .$nama_file_baru);

    return $nama_file_baru;
}

function tambah($data){
    $conn = koneksi();
    
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $penerbit = htmlspecialchars($data['penerbit']);

    $gambar = upload();
    if(!$gambar){
        return false;
    }
    
    $query = "INSERT INTO Buku
                VALUES
                ('','$judul','$penulis','$penerbit','$gambar');
                ";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
} 

function ubah($data){
    $conn = koneksi();
    
    $id = $data['id'];
    $gambar_lama = htmlspecialchars($data['gambar_lama']);
    $nama = htmlspecialchars($data['judul']);
    $harga = htmlspecialchars($data['penulis']);
    $deskripsi = htmlspecialchars($data['penerbit']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'no-image.jpg') {
        $gambar = $gambar_lama;
    }
    
    $query = "UPDATE buku SET
                gambar = '$gambar',
                judul = '$judul',
                penulis = '$penulis',
                penerbit =  '$penerbit',
                WHERE id = $id ";
    
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}

function hapus($id){
    $conn = koneksi();

    $b = query("SELECT * FROM buku WHERE id = $id");
    if ($b['gambar'] != 'no-image.jpg') {
        unlink("../assets/img/" .$b['gambar']);
    }
    
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}
?>