<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Produk</title>
</head>
<body>
    <h1>Tambah Data Produk</h1>
    <form action="tambah_data_produk_process.php" method="POST">
        <label for="nama">Nama Produk</label>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="harga">Harga</label>
        <input type="number" name="harga" id="harga">
        <br>
        <button name="submit" type="submit">TAMBAH</button>
    </form>
</body>
</html>
