<?php 
    // Yusma Cantika Parhati
    // Kelas 4C
    // NPM : 2110631170117
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6</title>
</head>
<body>
    <h1>Aplikasi Penghitung BMI</h1>
    <form method="POST" action="">
        Berat Badan (kg):
        <input type="number" name="berat"><br>
        <br>
        Tinggi Badan (cm):
        <input type="number" name="tinggi"><br>
        <br>
        <input type="submit" name="hitung" value="Hitung BMI">
        <br>
    </form>
    <?php 
    if(isset($_POST['hitung'])){
        echo "<h2>Hasil Perhitungan</h2>";
        echo "Berat Badan : ".$_POST['berat']." kg<br>";
        echo "Tinggi Badan : ".$_POST['tinggi']." cm<br>";

        $tinggi = $_POST['tinggi']/100; 
        $tb_rumus = $tinggi*$tinggi;
        $hasil_tb = number_format($tb_rumus, 2, '.', '');
        $hasil = $_POST['berat']/$hasil_tb;
        $hasil_akhir = number_format($hasil, 2, '.', '');
        echo "BMI : ".$hasil_akhir."<br>";

        if($hasil_akhir < 18.5){
            echo "Kategori BMI : Kurus";
        }else if(($hasil_akhir >= 18.5) && ($hasil_akhir <= 24.9)){
            echo "Kategori BMI : Normal";
        }else if(($hasil_akhir >= 25) && ($hasil_akhir <= 29.9)){
            echo "Kategori BMI : Gemuk";
        }else{
            echo "Kategori BMI : Obesitas";
        }
        echo "</b>";
    }
    ?>
</body>
</html>