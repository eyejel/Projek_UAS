<?php
// Koneksi ke database
include 'koneksi.php';

// Periksa apakah data diterima dari formulir
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari formulir
    $username = isset($_POST['username']) ? $conn->real_escape_string($_POST['username']) : null;
    $menu = isset($_POST['menu']) ? $conn->real_escape_string($_POST['menu']) : null;
    $comment = isset($_POST['comment']) ? $conn->real_escape_string($_POST['comment']) : null;
    $menu_id = isset($_POST['menu_id']) ? intval($_POST['menu_id']) : null;

    // Validasi data
    if ($username && $menu && $comment && $menu_id) {
        // Query untuk menyimpan data ke database
        $sql = "INSERT INTO comments (menu_id, username, menu, comment) 
                VALUES ('$menu_id', '$username', '$menu', '$comment')";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(['success' => true, 'message' => 'Komentar berhasil ditambahkan!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Gagal menyimpan data: ' . $conn->error]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Data tidak lengkap!']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Metode tidak valid!']);
}

// Tutup koneksi
$conn->close();
?>
