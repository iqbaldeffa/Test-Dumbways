<?php
require("header.php");
require("koneksi.php");

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM image_blog WHERE id=$id");




if (mysqli_affected_rows($conn) > 0) {
    echo "
    <script>
    alert('data berhasil dihapus!');
    document.location.href = 'blog_view.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('data gagal dihapus!');
    document.location.href = 'pblog_view.php';
    </script>
    ";
}
