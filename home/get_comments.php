<?php
include 'koneksi.php'; 

// Mendapatkan menu_id dari URL
$menu_id = isset($_GET['menu_id']) ? intval($_GET['menu_id']) : 1;

// Query untuk mendapatkan komentar berdasarkan menu_id
$sql = "SELECT * FROM comments WHERE menu_id = $menu_id ORDER BY created_at ASC";
$result = $conn->query($sql);

// Menyiapkan data dalam format array
$comments = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
}

// Mengirimkan data dalam format JSON
echo json_encode($comments);
$conn->close();
?>
