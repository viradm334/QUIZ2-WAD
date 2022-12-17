<?php

include 'config/connector.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body class="bg-primary bg-opacity-25">
    <section>
        <div class="d-flex flex-column min-vh-100 justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-10 mx-auto bg-white rounded shadow">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="m-5 text-center">
                                    <h1>Welcome!</h1>
                                </div>

                                <form class="m-5">
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Email</label>
                                        <input class="form-control" type="text" id="username" name="admin_email" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="password">Password</label>
                                        <input class="form-control" type="password" id="password" name="admin_password" />
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="form-check text-start">
                                                <input class="form-check-input" type="checkbox" id="remember-me" />
                                                <label class="form-check-label" for="remember-me" >Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-end">
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <input type="submit" class="form-control btn btn-primary mt-3" />
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <img src="img/admin.svg" alt="login" class="img-fluid p-5" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>