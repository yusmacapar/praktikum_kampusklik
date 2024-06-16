<?php

include "koneksi.php";

$npm = isset($_GET['id']) ? $_GET['id']: '';
$apakah_proses = isset($_GET['proses']) ? $_GET['proses']: '';

$proses_edit = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id= '".$npm."' ") 
or die (mysqli_error($koneksi));

if($apakah_proses == 1){
    $npm_mhs = $_POST['npm'];
    $nama_mhs = $_POST['nama'];
    $prodi_mhs = $_POST['prodi'];

    $proses_update = mysqli_query($koneksi,"UPDATE mahasiswa SET npm = '$npm_mhs', nama_mhs = '$nama_mhs',
                                            prodi = '$prodi_mhs' WHERE id= '".$npm."' ") 
                                    or die (mysqli_error($koneksi));

    if($proses_update){
        echo "
            <script>
                alert('Data Berhasil Disimpan');
                window.location.href='index.php';
            </script>";
    }else 
        echo "
            <script>
                alert('Data gagal disimpan');
                window.location.href='index.php';
            </script>";

}

?>