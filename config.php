<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "coursedb";

    // MYSQLI (object-oriented, procedural)
    // PDO
    // Biz procedural olan yöntemi kullanıyoruz.

    $baglanti = mysqli_connect($host,$username,$password,$database);

    if(mysqli_connect_errno() > 0) {
        die("hata: ".mysqli_connect_errno());
    }


?>