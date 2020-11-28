<?php
require("header.php");
require("koneksi.php");


$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");

$data = mysqli_fetch_assoc($query);

if (isset($_POST["submit"])) {

    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'users_view.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'users_view.php';
        </script>
        ";
    }

    $id = $_POST["id"];
    $id_users = $_POST["id_users"];
    $name = $_POST["name"];
    $email = $_POST["email"];



    $query = "UPDATE users SET
    id_users = '$id_users',
    name = '$name',
    email = '$email'
    WHERE id = $id
";

    mysqli_query($conn, $query);
}

?>


<div class="container">
    <div class="row">
        <div class="col">
            <form action="" method="post">
                <input class="form-control" type="hidden" name="id" value="<?= $data["id"]; ?>">
                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="id_users">ID users</label>
                    </div>
                    <input type="text" class="form-control" name="id_users" id="id_users" value="<?= $data["id_users"]; ?>" autofocus>
                </div>

                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="name">NAME</label>
                    </div>
                    <input type="text" class="form-control" name="name" id="name" value="<?= $data["name"]; ?>">
                </div>

                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="email">EMAIL</label>
                    </div>
                    <input type="text" class="form-control" name="email" id="email" value="<?= $data["email"]; ?>">
                </div>

                <div>
                    <button class="btn btn-primary mt-5" type="submit" name="submit" onclick="return confirm('ingin mengubah data ini?');">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>