<?php

include 'config/connector.php';
include 'config/cancelAppointment.php';
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
                <a class="nav-link" href="articles.html">Articles</a>
              </li>
              <li class="nav-item">
                <button id="show-login" type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Log in
                </button>
              </li>
          </div>
        </div>
      </nav>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="section-header text-center pb-5">
                    <h5>Thank You for Reserving A House Tour</h5>
                    <p>Please check again your reservation details.</p>
                  </div>
                </div>
              </div>

              <div class="row">
                <table class="table table-secondary">
                    <tr>
                        <th>Number</th>
                        <th>Order ID</th>
                        <th>House ID</th>
                        <th>Customer Name</th>
                        <th>Time</th>
                        <th>Agent</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>09877980970</td>
                        <td>6000987</td>
                        <td>Andrew Smith</td>
                        <td>12-09-2022 09:00 AM</td>
                        <td>Alexander</td>
                        <td><a href="cancelAppointment.php?op=delete&id=<?php echo $id_mobil ?>" onclick="return confirm('Anda yakin untuk menghapus item?')"><button type="button" class="btn btn-danger" id="deleted">Delete</button></a></td>
                    </tr>
                </table>
              </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>