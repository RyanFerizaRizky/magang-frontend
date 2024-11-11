<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <style>
            *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body{
        background: url({{ asset('img/img.png') }}) no-repeat;
        background-size: cover;
        font-family: 'Poppins', sans-serif;
    }

    form{
        width: 30%;
        background-color: white;
        padding: 30px;
        border-radius: 20px;
        margin-top: 150px;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    }

    .form-control{
        font-size: small;
    }

    .text-center{
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: larger;
    }
    .text-desc{
        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        font-size: small;
        text-align: center;
    }

    .btn-primary{
        width: 100%;
        border: none;
        border-radius: 5px;
        background-color: #008797;
    }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <form class="mx-auto" action="index.html" method="post">
            <a href="#" class="d-flex justify-content-center mb-3">
                <img src="{{ asset('img/logopnj.png') }}" width="100" alt="">
            </a>
            <h4 class="text-center">Welcome our admin</h4>
            <h6 class="text-desc">Enter your email and password to login</h6>
            <div class="mb-3 mt-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
            </div>
            
            <button href="index.html" type="submit" class="btn btn-primary">Login</button>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>