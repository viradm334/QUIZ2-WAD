<?php

include 'config/connector.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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

      <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 align="center">House Images</h2>
                    <div class="col" style="overflow-y: scroll; height: 480px; width: 620px;">
                        <img src="img/interior-1.jpg" alt="" height="400px" width="600px">
                        <img src="img/interior-2.jpg" alt="" height="400px" width="600px">
                        <img src="img/interior-3.jpg" alt="" height="400px" width="600px">
                        <img src="img/interior-4.jpg" alt="" height="400px" width="600px">
                    </div>
                </div>
                <div class="col">
                    <form action="myform.html">
                        <h2 align="center">House Details</h2>
                    <p>$275.0000<br>3 Bedroom, 1 Kitchen, 1 Living Room with a Backyard</p>
                    <p>Overview</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam, impedit sit. Sint officia praesentium deleniti tenetur dignissimos earum ad. Quia tenetur dolore sit distinctio maxime quasi laborum esse eos architecto?</p>
                    <div class="col">
                        <p>Schools Nearby</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sit odio consectetur alias inventore.</p>
                    </div>
                    <button type="button" class="btn btn-warning">Request for a tour</button>
                    <button type="button" class="btn btn-primary">Contact agent</button>
                    </form>
                    
                </div>
            </div>
        </div>
      </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>