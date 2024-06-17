<?php
include_once("connect.php");
$query = mysqli_query($db, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <style>
        tr, td {
            padding: 10px;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Harga</td>
            <td>Action</td>
        </tr>
        <?php foreach($query as $d) { ?>
            <tr>
                <td><?php echo $d['id'] ?></td>
                <td><?php echo $d['nama'] ?></td>
                <td><?php echo $d['harga'] ?></td>
                <td>
                    <a href="edit_produk.php?id=<?php echo $d['id'] ?>">EDIT</a> | 
                    <a href="hapus_produk.php?id=<?php echo $d['id'] ?>" onclick="return confirm('Are you sure?')">HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a href="tambah_data_produk.php">Tambah Data</a>
</body>
</html>
