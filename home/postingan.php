<?php
include 'koneksi.php';

// Mengambil komentar dari database berdasarkan menu_id
$menu_id = isset($_GET['menu_id']) ? intval($_GET['menu_id']) : 1;
$sql = "SELECT * FROM comments WHERE menu_id = $menu_id ORDER BY created_at ASC";
$result = $conn->query($sql);
$comments = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $comments[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Post Clone</title>
    <link rel="stylesheet" href="stylepostingan.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="../img/latar foto.jpg" rel="icon">
</head>
<body>
    <div class="post-container">
        <!-- Video Section -->
       <!-- Video Section -->
       <div class="img-section">
    <img src="../img/terimakasih 2.jpg" alt="Thank You Image" />
</div>



        <!-- Caption Section -->
        <div class="caption-section">
            <p>Deskripsi</p>
        </div>

        <!-- Comment Section -->
        <div class="add-comment">
            <form id="commentForm">
                <input type="text" id="username" name="username" placeholder="Username" required />
                <input type="text" id="menu" name="menu" placeholder="Pilihan Menu" required />
                <input type="text" id="commentText" name="comment" placeholder="Tambahkan komentar..." required />
                <input type="hidden" name="menu_id" value="<?php echo $menu_id; ?>" />

                <button type="submit" style="margin-top: 12px;">Kirim</button>
            </form>
            <div id="message" class="message"></div>
        </div>

        <!-- Display Comments -->
        <div class="comments">
            <?php if (count($comments) > 0): ?>
                <?php foreach ($comments as $comment): ?>
                    <div class="comment-card" style="text-align: left;">
                        <p class="comment-user"><strong><?php echo htmlspecialchars($comment['username']); ?></strong></p>
                        <p class="comment-menu"><?php echo htmlspecialchars($comment['menu']); ?></p>
                        <p class="comment-text"><?php echo htmlspecialchars($comment['comment']); ?></p>
                        <p class="comment-time"><?php echo date('d M Y', strtotime($comment['created_at'])); ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="no-comments">Belum ada komentar!</p>
            <?php endif; ?>
        </div>
    </div>

    <script>
        document.getElementById("commentForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Menghindari reload halaman

            // Mendapatkan data dari form
            const username = document.getElementById("username").value;
            const menu = document.getElementById("menu").value;
            const comment = document.getElementById("commentText").value;
            const menu_id = document.querySelector("input[name='menu_id']").value;

            // Menyiapkan data untuk dikirim ke server
            const formData = new FormData();
            formData.append("username", username);
            formData.append("menu", menu);
            formData.append("comment", comment);
            formData.append("menu_id", menu_id);

            // Mengirim data menggunakan AJAX
            fetch("insert_comment.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())  // Mengharapkan response dalam format JSON
            .then(data => {
                if (data.success) {
                    // Menampilkan pesan sukses dengan alert
                    alert("Komentar berhasil dikirim!");
                    document.getElementById("commentForm").reset();  // Menghapus form setelah sukses
                } else {
                    // Menampilkan pesan gagal dengan alert
                    alert("Gagal mengirim komentar. Coba lagi!");
                }
            })
            .catch(error => {
                // Menampilkan pesan kesalahan jika ada masalah dengan fetch
                alert("Terjadi kesalahan, coba lagi!");
            });
        });
    </script>
</body>
</html>
