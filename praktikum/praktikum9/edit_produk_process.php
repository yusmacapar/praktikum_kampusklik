<?php
include_once("connect.php");

if(isset($_GET['id']) && isset($_POST["nama"]) && isset($_POST["harga"])){
    $id = $_GET['id'];
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    $query = mysqli_query($db, "UPDATE produk SET nama='$nama', harga='$harga' WHERE id='$id'");

    if($query) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>
