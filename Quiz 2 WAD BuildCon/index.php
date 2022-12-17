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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="progress-container">
      <div class="progress-bar" id="myBar"></div>
    </div> 
    
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

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Log in</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="form">
                <div class="form-element mb-1">
                  <label for="email">Email</label>
                  <input type="text" id="email" placeholder="Email">
                </div>
                <div class="form-element">
                  <label for="password">Password</label>
                  <input type="password" id="password" placeholder="Password">
                </div>
                <div class="form-element">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
                </div>
                <div class="form-element">
                  <a href="#">Forgot password?</a>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Log In</button>
            </div>
          </div>
        </div>
      </div>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/car-1.jpg" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>Your Dream House</h5>
              <p>Rent or buy property here with the best price</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/car-2.jpg" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>Custom Filters</h5>
              <p>Search for houses based on your own needs!</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/car-3.jpg" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
              <h5>Always Dedicated</h5>
              <p>Find your best deal here!</p>
              <p><a href="#" class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <section id="about" class="about-section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
              <div class="about-img">
                <img src="img/about-1.jpg" alt="" class="img-fluid" width="400px" height="400px">
              </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
              <div class="about-text">
                <h2>We Provide Best Quality <br>Service Ever</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, voluptas praesentium accusantium quas repellendus ullam necessitatibus iure commodi. Vitae iste ipsam, deserunt quas non animi neque! Repellendus dolorem explicabo quis, deserunt veritatis, esse iure praesentium accusamus consequuntur rerum dolore iusto ea quos porro sed eos, beatae quo! Deserunt, est voluptatibus?</p>
                <a href="#" class="btn btn-warning">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="lokasi" class="lokasi section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Find Us</h2>
                        <p>Jl. Soekarno-Hatta No.437 Bandung, Jawa Barat</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.554819120333!2d107.64575411477298!3d-6.94368509498326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e814f450bb67%3A0x4d39927390a77bcf!2sJl.%20Soekarno%20Hatta%20No.538%2C%20Sekejati%2C%20Kec.%20Buahbatu%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040286!5e0!3m2!1sen!2sid!4v1665825954652!5m2!1sen!2sid"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </section>

        <section id="services" class="services section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-header text-center pb-5">
                  <h5>Why BuildCon?</h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Enim, quas.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                  <div class="card-body">
                    <i class="bi bi-subtract"></i>
                    <h3 class="card-title">Best Quality</h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur reiciendis labore consequuntur ullam? Dolore dolorum sit accusamus optio libero architecto rerum, laboriosam reprehenderit similique? Doloribus?</p>
                    <button class="btn btn-warning text-dark">Read More</button>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                  <div class="card-body">
                    <i class="bi bi-subtract"></i>
                    <h3 class="card-title">Easy Process</h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur reiciendis labore consequuntur ullam? Dolore dolorum sit accusamus optio libero architecto rerum, laboriosam reprehenderit similique? Doloribus?</p>
                    <button class="btn btn-warning text-dark">Read More</button>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-white text-center bg-dark pb-2">
                  <div class="card-body">
                    <i class="bi bi-subtract"></i>
                    <h3 class="card-title">Great Service</h3>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur reiciendis labore consequuntur ullam? Dolore dolorum sit accusamus optio libero architecto rerum, laboriosam reprehenderit similique? Doloribus?</p>
                    <button class="btn btn-warning text-dark">Read More</button>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </section>

        <section id='portfolio' class="portfolio section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-header text-center pb-5">
                  <h5>Our Services</h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Enim, quas.</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="img/square-1.jpg" alt="" class="img-fluid" width="400px" height="600px">
                      <h3 class="card-title">Buy a House</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur reiciendis dolorem autem laborum blanditiis quod at, voluptatum amet deserunt tenetur?</p>
                      <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="img/square-1.jpg" alt="" class="img-fluid" width="400px" height="600px">
                      <h3 class="card-title">Rent Property</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur reiciendis dolorem autem laborum blanditiis quod at, voluptatum amet deserunt tenetur?</p>
                      <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-light text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="img/square-1.jpg" alt="" class="img-fluid" width="400px" height="600px">
                      <h3 class="card-title">Agent Finder</h3>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur reiciendis dolorem autem laborum blanditiis quod at, voluptatum amet deserunt tenetur?</p>
                      <button class="btn bg-warning text-dark">Learn More</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="rating" class="rating section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-header text-center pb-5">
                  <h5>Rating</h5>
                  <p>Based on our customer's testimony</p>
                </div>
              </div>
            </div>

            <div class="row m-0">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="section-header text-center pb-5">
                      <h1>4.9</h1>
                      <p>4.9/5.0</p>
                      <div class="ratings">
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="progress m-2">
                      <div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress m-2">
                      <div class="progress-bar" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress m-2">
                      <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 10%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress m-2">
                      <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress m-2">
                      <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section id="contact" class="contact section-padding">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="section-header text-center pb-5">
                  <h5>Contact Us</h5>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> Enim, quas.</p>
                </div>
              </div>
            </div>

            <div class="row m-0">
              <div class="col-md-12 p-0 pt-4 pt-4 m-auto">
                <div class="row">
                  <div class="col-md-12">
                    <div class="mb-3">
                      <input type="text" class="form-control" required placeholder="Your Full Name">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <input type="text" class="form-control" required placeholder="Your Email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <input type="text" class="form-control" required placeholder="Your Phone Number">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="mb-3">
                      <textarea rows="3" required class="form-control" placeholder="Your Query Here"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <button class="btn btn-warning btn-lg btn-block mt-3">Send Now</button>
            </div>
        </section>

        <footer class="bg-light text-center text-lg-start">
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
              Copyright to BuilCon. All rights reserved.
          </div>
          <!-- Copyright -->
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
      document.querySelector("#show-login").addEventListener("click",function(){document.querySelector(".popup").classList.add("active");});
      document.querySelector(".popup .close-btn").addEventListener("click",function(){document.querySelector(".popup").classList.remove("active");});
    </script>
  </body>
</html>