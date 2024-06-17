<?php
include_once("connect.php");

if(isset($_POST["nama"]) && isset($_POST["harga"])){
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    $query = mysqli_query($db, "INSERT INTO produk (nama, harga) VALUES ('$nama', '$harga')");

    if($query) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>
