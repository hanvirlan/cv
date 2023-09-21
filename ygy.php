<?php
// Ini adalah contoh autentikasi sederhana. Anda harus menggantinya dengan logika autentikasi yang sesuai.
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === 'username_anda' && $password === 'password_anda') {
    // Login berhasil, arahkan ke halaman selamat datang.
    header("Location: selamat_datang.php");
    exit();
} else {
    // Login gagal, arahkan kembali ke halaman login dengan pesan error.
    header("Location: login.php?error=1");
    exit();
}
?>
