<?php
require("header.php");
require("koneksi.php");




if (isset($_POST["submit"])) {





    $title = $_POST["title"];
    $content = $_POST["content"];

    $user_id = $_POST["user_id"];


    $file_image = upload();
    if (!$file_image) {
        return false;
    }



    $query = "INSERT INTO image_blog VALUES
                ('', '$title', '$content', '$user_id', '$file_image')";

    mysqli_query($conn, $query);
}

function upload()
{
    $namaFile = $_FILES['file_image']['name'];
    $ukuranFile = $_FILES['file_image']['size'];
    $error = $_FILES['file_image']['error'];
    $tmpName = $_FILES['file_image']['tmp_name'];


    if ($error === 4) {
        echo "<script>
        alert('masukin terlebih dahulu!')
        </script>";
        return false;
    }

    $ekstensiGambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar2 = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar2, $ekstensiGambarvalid)) {

        echo "<script>
        alert('yang anda upload bukan gambar!')
        </script>";
        return false;
    }

    if ($ukuranFile > 2000000) {

        echo "<script>
        alert('tidak melebihi dari 2 mb!')
        </script>";
        return false;
    }


    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $ekstensiGambar2;

    move_uploaded_file($tmpName, 'img/' . $namaFilebaru);

    return $namaFilebaru;
}



?>






<div class="container">
    <div class="row">
        <div class="col">

            <form action="" method="post" enctype="multipart/form-data">
                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="title">TITLE</label>
                    </div>
                    <input type="text" class="form-control" name="title" id="title" autofocus>
                </div>

                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="content">CONTENT</label>
                    </div>
                    <input type="text" class="form-control" name="content" id="content">
                </div>

                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="user_id">USER_ID</label>
                    </div>
                    <input type="text" class="form-control" name="user_id" id="user_id">
                </div>

                <div class="input-group mt-5 ">
                    <label for="file_image">IMAGE</label>
                    <input type="file" name="file_image" id="file_image">
                </div>

                <button type="submit" class="btn btn-primary mt-5" name="submit">SUBMIT</button>
            </form>
        </div>
    </div>
</div>


</body>

</html>