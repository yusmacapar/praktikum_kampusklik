<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Form</title>
</head>
<body>
    <form action="proses.php" method="POST">
        NPM :
        <input type="text" name="npm" value=""\>
        <br>
        NILAI :
        <input type="text" name="nilai" value=""\>
        <br>
        ULANGI :
        <input type="text" name="ulangi" value=""\>
        <br>
        <button type="submit" name="proses_data">
            PROSES DATA
        </button>
    </form>
</body>
</html>