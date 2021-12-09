<?php

if (isset($_POST['username']) && isset($_POST['password'])) {

    $credential = [
        'username' => 'admin',
        'password' => 'admin',
    ];

    if ($_POST['username'] == $credential['username'] && $_POST['password'] == $credential['password']) {
        echo "Login berhasil";
    } else {
        echo "Username & password salah";
    }
}
