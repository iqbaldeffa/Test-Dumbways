<?php
require("header.php");
require("koneksi.php");

if (isset($_POST["submit"])) {


    $id_users = $_POST["id_users"];
    $name = $_POST["name"];
    $email = $_POST["email"];



    $query = "INSERT INTO users VALUES
                ('', '$id_users', '$name', '$email')";

    mysqli_query($conn, $query);
}


?>


<div class="container">
    <div class="row">
        <div class="col">
            <form action="" method="post">
                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="id_users">ID USERS</label>
                    </div>
                    <input type="text" class="form-control" name="id_users" id="id_users" autofocus>
                </div>

                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="name">NAME</label>
                    </div>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="input-group mt-5 ">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="email">EMAIL</label>
                    </div>
                    <input type="text" class="form-control" name="email" id="email">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary mt-5" name="submit">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>


</body>

</html>