<?php
include_once("connect.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM produk WHERE id='$id'");
    $data = mysqli_fetch_assoc($query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="edit_produk_process.php?id=<?php echo $id ?>" method="POST">
        <label for="nama">Nama Produk</label>
        <input type="text" name="nama" id="nama" value="<?php echo $data['nama'] ?>">
        <br>
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga" value="<?php echo $data['harga'] ?>">
        <br>
        <button name="submit" type="submit">EDIT</button>
    </form>
</body>
</html>
