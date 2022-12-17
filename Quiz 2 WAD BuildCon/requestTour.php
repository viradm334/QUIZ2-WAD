<?php

include 'config/connector.php';
include 'config/addAppointment.php';
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
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <button id="show-login" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Log in
                </button>
              </li>
          </div>
        </div>
      </nav>

      <div class="container mt-5">
        <h5 class="text-center">
            Boook A House Tour
        </h5>
      </div>

      <div class="container mb-6">
          <div class="card mt-3">
            <div class="row">

                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                  <div>
                    <img src="img/square-2.jpg" height="400px" width="400px">
                  </div>
                </div>
  
  
                <div class="col-md-6">
                    <form class="m-4" action="mytour.html">
                        <div class="mb-3">
                          <label for="nameinput" class="form-label">Name</label>
                          <input type="text" class="form-control" name="name" id="nameinput" value="Andrew Smith">
                        </div>

                        <div class="mb-3 ">
                            <label for="dateinput" class="form-label">Book Date</label>
                            <input type="date" class="form-control" name="date" id="dateinput">
                        </div>

                        <div class="mb-3 ">
                            <label for="time" class="form-label">Time</label>
                            <input type="time" class="form-control" name="checkin" id="time">
                        </div>

                        <div class="mb-3 ">
                          <label for="phone" class="form-label">Phone Number</label>
                          <input type="text" class="form-control" name="phone" id="phone">
                        </div>


                        <div class="d-grid gap-2 mb-3">
                            <button class="btn btn-success">Book</button>
                        </div>
                        

                    </form>
                </div>
            </div>
          </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>