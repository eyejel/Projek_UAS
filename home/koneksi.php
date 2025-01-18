<?php
// Konfigurasi untuk koneksi database
$servername = "localhost"; 
$username = "root";       
$password = "";            
$dbname = "restoran";     

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    // Mencatat kesalahan di log tanpa menampilkan di halaman
    error_log("Koneksi gagal: " . $conn->connect_error, 0);
    die("Terjadi kesalahan saat koneksi.");  // Pesan umum untuk pengguna
} else {
    // Menyembunyikan pesan dan hanya mencatatnya di log
    error_log("Koneksi berhasil ke database '$dbname' pada server '$servername'.", 0);
    // Tidak ada output di halaman
}
?>
