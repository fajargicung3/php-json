<?php
//data json
$data = json_decode(file_get_contents("data.json"), true);
$id = count($data);
// register
if (isset($_POST['username'])) {
    $data[$id + 1]['username'] = $_POST['username'];
    $data[$id + 1]['password'] = $_POST['password'];
    $data[$id + 1]['email'] = $_POST['email'];
    $json = json_encode($data);
    file_put_contents("data.json", $json);
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

    <title>Halaman Register</title>
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

        .register {
            border-radius: 10px;
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .gambar {
            background-image: url("img/sunset.jpg");
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
                                <h1 class="pb-3">Hey, Register Sini !</h1>
                                <form action="" method="POST">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Masukkan email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                                    </div>
                                    <div class="d-grid gap-2 mt-4">
                                        <button class="btn btn-success pt-2 pb-2 register" type="submit" name="login" value="POST">Register</button>
                                        <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Masuk Login</a></p>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 gambar">
                                <div class="text" style="margin-top:26.5rem">
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