<?php
    $nama = "Yusma Cantika";

    echo $nama . "<br>";

    const PHI = 3.14;
    echo PHI;

    $namalengkap = $nama . " LENGKAP";

    echo "<br>" . $namalengkap . "<br>";

    $books = array("PHP for Beginner", "Javascript for Beginner",
    $authors = ["Rasmus Lerdorf", "Brendan Eric", "Mark Otto"]);

    $authors[0] = "Yusma Cantika";

    var_dump ($books);
    var_dump ($authors);

    echo "<ul>";
    for ($i = 0; $i < count($authors); $i++){
        echo "<li>" . $authors[$i] . "</li>";
    }
    echo "</ul>";

    function sum(){

    }
?>