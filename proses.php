<?php

require('db.php');

if (isset($_POST['submit'])) {
    // Create
    $query = "INSERT INTO students (first_name, last_name, birth_day) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['birth_day']}')";
    mysqli_query($con, $query);

    echo json_encode([
        'message' => 'Data berhasil disimpan'
    ]);
}

if ($_GET['get_data']) {
    $query = "SELECT * FROM students";
    $result = mysqli_query($con, $query);

    $all_data = [];

    while ($data = mysqli_fetch_assoc($result)) {
        $all_data[] = $data;
    }

    echo json_encode(['data' => $all_data]);
}
