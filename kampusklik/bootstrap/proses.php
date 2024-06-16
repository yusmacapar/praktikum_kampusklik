<?php

    include "koneksi.php";

    #mengambil data inputan
    $npm_mhs = $_POST['npm'];
    $nama_mhs = $_POST['nama'];  
    $prodi_mhs = $_POST['prodi'];
    $perulangan = $_POST['ulangi'];

    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa(npm, nama_mhs, prodi) 
                VALUES ('".$npm_mhs."','".$nama_mhs."','".$prodi_mhs."') ") 
    or die (mysqli_error($koneksi));

    if($proses){
        echo "
            <script>
                alert('Data Berhasil Disimpan');
                window.location.href='index.php';
            </script>";
    }else echo "
            <script>
                alert('Data gagal disimpan');
                window.location.href='index.php';
            </script>";

?>