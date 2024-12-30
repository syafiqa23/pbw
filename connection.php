<?php
try {
    $koneksi = new PDO("mysql:host=localhost;
    dbname=akademik", 'root','');
}
catch(PDOException $e){
    echo "koneksi gagal" ,$e->getMessage();
}