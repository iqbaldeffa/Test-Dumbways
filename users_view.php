<?php
require("header.php");
require("koneksi.php");


$ambil = mysqli_query($conn, "SELECT * FROM users");


?>
<div>

    <?php

    while ($data = mysqli_fetch_assoc($ambil)) :
    ?>

</div>

<div class="container">
    <div class="row float-left ml-5">
        <div class="col">
            <div class="card mt-5">
                <div class="card-body">
                    <h5 class="card-title"><?= $data["id_users"]; ?></h5>
                    <h5 class="card-title"><?= $data["name"]; ?></h5>
                    <p class="card-text"><?= $data["email"]; ?></p>
                    <a type="submit" class="btn btn-primary " name="submit" href="edit_users.php?id=<?= $data['id'] ?>">EDIT</a>
                    <a type="submit" class="btn btn-primary " name="submit" href="delete_users.php?id=<?= $data['id'] ?>" onclick="return confirm('ingin menghapus data ini?');">DELETE</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php endwhile; ?>

</body>

</html>