<?php
// login
$data_login = json_decode(file_get_contents("data.json"), true);
$succes = 0;
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    foreach ($data_login as $user) {
        $us = $user['username'];
        $pass = $user['password'];
        if ($us == $username && $pass == $password) {
            $succes = 1;
        } else {
        }
    }

    if ($succes == 1) {
        echo "<script>alert('berhasil login');</script>";
    } else {
        echo "<script>alert('user tidak ada ');</script>";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Halaman Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .form-control {
            border-radius: 10px;
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .login {
            border-radius: 10px;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .gambar {
            background-image: url("img/laut.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="card">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 p-5">
                                <h1 class="pb-3">Hey, Login Sini !</h1>
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                                    </div>
                                    <div class="d-grid gap-2 mt-4">
                                        <button class="btn btn-success pt-2 pb-2 login" type="submit" name="login" value="POST">Login</button>
                                        <p class="text-center mt-3">Belum punya akun? <a href="register.php">Register sini</a></p>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 p-0 gambar">
                                <div class="text" style="margin-top:12.4rem">
                                    <h4 class="text-center text-white">Quotes Today</h4>
                                    <h6 class="text-center text-white">Lakukan Apa Yang Membuatmu Bahagia</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
</body>

</html>