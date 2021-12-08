<?php

$db_host = 'localhost';
$db_name = 'latihan1';
$db_user = 'root';
$db_pass = 'bismillah';


$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$con) {
    echo "koneksi ke database GAGAL";
    exit();
}
