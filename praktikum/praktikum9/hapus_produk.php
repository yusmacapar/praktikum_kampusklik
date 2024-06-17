<?php
include_once("connect.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($db, "DELETE FROM produk WHERE id='$id'");

    if($query) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>
