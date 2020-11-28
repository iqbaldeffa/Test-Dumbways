<?php
require("header.php");
require("koneksi.php");
$id = $_GET['id'];

$ambil = mysqli_query($conn, "SELECT * FROM image_blog INNER JOIN users ON users.id_users=image_blog.user_id WHERE image_blog.id=$id");

$data = mysqli_fetch_assoc($ambil);


?>



<div class="container">
    <div class="card">
        <div>
            <img src="img/<?= $data["file_image"]; ?>" class="card-img-top">
        </div>



        <div class="card-body">
            <h2 class="card-title"><?= $data["title"]; ?></h2>
            <p class="card-text"><?= $data["content"]; ?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"><?= $data["name"]; ?></small>
            <small class="text-muted float-right"><?= $data["email"]; ?></small>
        </div>

    </div>

</div>
</body>

</html>