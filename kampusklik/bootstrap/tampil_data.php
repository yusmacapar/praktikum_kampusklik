<?php

    include "koneksi.php";

    $proses_tampil = mysqli_query($koneksi,"SELECT * FROM mahasiswa") 
    or die (mysqli_error($koneksi));

?>