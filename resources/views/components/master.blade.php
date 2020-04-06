<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body>
    {{-- <nav id="topNav" class="navbar fixed-top navbar-toggleable-sm navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          ☰
      </button>
      <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
          </ul>
      </div>
      <a class="navbar-brand mx-auto" href="#">NavBar</a>
      <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
              </li>
          </ul>
      </div>
  </nav> --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent ">
      <div class="container">
        <button class="navbar-toggler fixed-top mt-2 ml-2" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav col-6 offset-2 justify-content-between">
            <a class="nav-item nav-link text-white font-weight-bold" href="#">Produk</a>
            <a class="nav-item nav-link text-white font-weight-bold " href="#">Harga</a>
          </div>
        </div>
        <a class="navbar-brand mx-auto" href="#" >
          <img id="img-logo" src="{{asset('image/logo.png')}}" height="110" width="100">
        </a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav col-6 offset-4 justify-content-between">
              <a class="nav-item nav-link text-white font-weight-bold" href="#">Produk</a>
              <a class="nav-item nav-link text-white font-weight-bold " href="#">Harga</a>
            </div>
          </div>
      </div>
    </nav>
    <div class="container mt-5">
      @yield('content')
    </div>

    <div class="footer bg-success">
      <h1>footer</h1>
      <h1>footer</h1>
      <h1>footer</h1>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>