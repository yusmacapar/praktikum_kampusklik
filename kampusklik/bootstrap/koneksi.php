<?php

    $hostname = "localhost:3307";
    $userDataBase = "root";
    $passwordUser = "";
    $databaseName = "kuliah_pbw";

    $koneksi = mysqli_connect($hostname,$userDataBase,$passwordUser,$databaseName) or die (mysqli_error());

    // if($koneksi){
    //     echo "berhasil koneksi";
    // }else echo "gagal koneksi";

?>