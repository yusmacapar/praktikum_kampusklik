<?php
    $data = ["Rasmus", "Brendon", "Mark"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP in HTML</title>
</head>
<body>
    <ul>
        <?php 
            for ($i=0; $i < count($data); $i++){
            echo "<li>" . $data[$i] . "</li>";
            }
        ?>
    </ul>
</body>
</html>