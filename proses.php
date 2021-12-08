<?php

require('db.php');

if (isset($_POST['submit'])) {
    // Create
    $query = "INSERT INTO students (first_name, last_name, birth_day) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['birth_day']}')";
    mysqli_query($con, $query);

    header('Location: crud.php');
} else {
    echo "Tidak ada data yang disubmit";
}
