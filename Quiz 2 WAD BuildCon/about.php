<?php

include 'config/connector.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span class="text-warning">Build</span>Con</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="catalogue.html">Catalogue</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a href="#" class="btn btn-warning mt-0.2">Log In</a>
              </li>
          </div>
        </div>
      </nav>

      <section id="tentang" class="tentang section-padding">
        <div class="container h-100">
            <div class="section-header text-center pb-5">
                <h2>Tentang Kami</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="1264" height="480" src="https://www.youtube.com/embed/T1dpLRbRygU" title="Focus Real Estate - Company Profile" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-md-3" align="justify">
                        <p>BuilCon adalah perusahaan Real Estate yang menyediakan jasa penjualan atau penyewaan rumah sesuai dengan lokasi yang anda cari. Mulai dari rumah, apartmen, hingga gedung, semuanya lengkap disini!</p>
                    </div>
                    <div class="col-md-3" align="justify">
                        <p>BuilCon telah berdiri sejak tahun 1990. Dengan pengalaman selama lebih dari 30 tahun dalam penjualan properti kami bertekad untuk memberikan pelayanan terbaik dan mencarikan rumah impian anda.</p>
                    </div>
                </div>
                <a href="#" class="btn btn-warning mt-3">Learn More</a>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>