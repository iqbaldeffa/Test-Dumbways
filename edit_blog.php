<?php
require("header.php");
require("koneksi.php");

function upload()
{
    $namaFile = $_FILES['file_image']['name'];
    $ukuranFile = $_FILES['file_image']['size'];
    $error = $_FILES['file_image']['error'];
    $tmpName = $_FILES['file_image']['tmp_name'];


    if ($error === 4) {
        echo "<script>
        alert('masukin gambar oi')
        </script>";
        return false;
    }

    $ekstensiGambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarvalid)) {

        echo "<script>
        alert('yang anda upload bukan gambar')
        </script>";
        return false;
    }

    if ($ukuranFile > 1000000) {

        echo "<script>
        alert('gambar terlalu besar!')
        </script>";
        return false;
    }


    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFilebaru);

    return $namaFilebaru;
}



$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM image_blog INNER JOIN users ON image_blog.user_id = users.id_users WHERE image_blog.id='$id'");

$data = mysqli_fetch_assoc($query);

if (isset($_POST["submit"])) {

    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'blog_view.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah!');
        document.location.href = 'blog_view.php';
        </script>
        ";
    }

    $id = $_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $user_id = $_POST["user_id"];

    $photolama = $_POST["file_image"];

    if ($_FILES['file_image']['error'] === 4) {

        $file_image = $photolama;
    } else {
        $file_image = upload();
    }






    $query = "UPDATE image_blog SET
    title = '$title',
    content = '$content',
    user_id = '$qty',
    file_image = '$file_image'
    WHERE id = $id
";
    mysqli_query($conn, $query);
}




?>






<div class="container">
    <div class="row">
        <div class="col">

            <form action="" method="post" enctype="multipart/form-data">
                <input class="form-control" type="hidden" name="id" value="<?= $data["id"]; ?>">
                <input class="form-control" type="hidden" name="photolama" value="<?= $data["file_image"]; ?>">
                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="title">TITLE</label>
                    </div>
                    <input type="text" class="form-control" name="title" id="title" value="<?= $data["title"]; ?>" autofocus>
                </div>

                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="content">CONTENT</label>
                    </div>
                    <input type="text" class="form-control" name="content" id="content" value="<?= $data["content"]; ?>">
                </div>

                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="user_id">USER_ID</label>
                    </div>
                    <input type="text" class="form-control" name="user_id" id="user_id" value="<?= $data["user_id"]; ?>">
                </div>



                <div class="input-group mt-5 ">

                    <label for="file_image">FILE IMAGE</label>
                    <img src="img/<?= $data['file_image']; ?>">
                    <input type="file" name="file_image" id="file_image">
                </div>

                <button type="submit" class="btn btn-primary mt-5" name="submit">SUBMIT</button>
            </form>
        </div>
    </div>
</div>


</body>

</html>