<?php
require("header.php");
require("koneksi.php");




$ambil = mysqli_query($conn, "SELECT * FROM users INNER JOIN image_blog WHERE users.id_users=image_blog.user_id");

?>




<div>

    <?php

    while ($data = mysqli_fetch_assoc($ambil)) :
    ?>

</div>

<div class="container">
    <div class="row float-left ml-5">
        <div class="col">
            <div class="card mt-5 " style="width: 18rem;">
                <img src="img/<?= $data["file_image"]; ?>" class="card-img-top">

                <div class="card-body">
                    <h5 class="card-title"><?= $data["title"]; ?></h5>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?= $data["name"]; ?></li>

                </ul>

                <div class="card-body m-auto">
                    <a type="submit" class="btn btn-primary" name="submit" href="detail.php?id=<?= $data['id'] ?>">DETAIL</a>

                    <a type="submit" class="btn btn-primary" name="submit" href="edit_blog.php?id=<?= $data['id'] ?>">EDIT</a>

                    <a type="submit" class="btn btn-primary" name="submit" href="delete_blog.php?id=<?= $data['id'] ?>" onclick="return confirm('ingin menghapus data ini?');">DELETE</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>



<?php endwhile; ?>







</body>

</html>