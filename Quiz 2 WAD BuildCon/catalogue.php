<?php

include 'config/connector.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello, world!</title>

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

      <div class="category">
        <div class="container">
            <div class="row">
                <div class="category-item mb-1 mt-1">
                  <button type="button" class="btn btn-outline-secondary">Search for houses...</button>
                  <button type="button" class="btn btn-warning">For Sale</button>
                  <button type="button" class="btn btn-info">Price</button>
                  <button type="button" class="btn btn-info">Multi-family</button>
                </div>
            </div>
        </div>
      </div>

      <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.56211042157!2d107.64315755!3d-6.90344945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Bandung%20City%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1667378357344!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col" style="overflow-y: scroll; height: 450px;" >
                    <div class="row">
                        <div class="col">
                            <div class="card mb-3" style="width: 14rem;">
                                <img class="card-img-top img-fluid" src="img/house-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <p class="card-text">$275.000<br>3LDK</p>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 14rem;">
                                <img class="card-img-top img-fluid" src="img/house-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <p class="card-text">$275.000<br>3LDK</p>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 14rem;">
                                <img class="card-img-top img-fluid" src="img/house-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <p class="card-text">$275.000<br>3LDK</p>
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="card" style="width: 14rem;">
                                <img class="card-img-top img-fluid" src="img/house-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <p class="card-text">$275.000<br>3LDK</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>