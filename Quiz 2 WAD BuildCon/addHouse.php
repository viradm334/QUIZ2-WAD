<?php

include 'config/connector.php';
include 'config/addHome.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="container mt-5">
                <h5 class="text-center">
                    Add House
                </h5>
                <p class="text-center">
                    Add a New House
                </p>
            </div>
            <div class="col-md-9">
                <form class="" action="" enctype="multipart/form-data" method="POST">
                    <div class="mb-3">
                        <label for="nameinput" class="form-label">Kota</label>
                        <input type="text" class="form-control" name="kota" id="kota">
                    </div>

                    <div class="mb-3">
                        <label for="nameinput" class="form-label">Harga</label>
                        <input type="text" class="form-control" name="harga" id="harga">
                    </div>

                    <div class="mb-3 ">
                        <label for="dateinput" class="form-label">Tanggal Beli</label>
                        <input type="date" class="form-control" name="tanggalbeli" id="tanggalbeli">
                    </div>

                    <div class="mb-3 ">
                        <label for="phone" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi">
                    </div>

                    <div class="mb-3 ">
                        <div class="col">
                            <label for="phone" class="form-label">Foto Thumbnail</label>
                        </div>
                        <input type="file" name="thumbnail" id="thumbnail">
                    </div>

                    <div class="mb-3 ">
                        <div class="col">
                            <label for="phone" class="form-label">Foto Interior</label>
                        </div>
                        <input type="file" name="interior" id="interior">
                    </div>

                    <div class="mb-3">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" style="width: 150px;" id="tambah">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>