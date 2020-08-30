<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"><!-- css -->

        <link rel="stylesheet" type="text/css" href="{{ asset('tampilan/style.css')}}">


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body id="page-top">
<!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
<!--               <a class="navbar-brand nav-item" href="#page-top"><h3><SPAN class="font-weight-bold">KLIKBITNET</SPAN></h3></a> -->
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-white" href="#">HOME <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  font-weight-bold text-white" href="#product" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      PRODUCT
                    </a>
                    <div class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">PUISI</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">CERPEN</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">JOKE</a>
                    </div>
                 </li>
                  <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-white" href="#">ABOUT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-white" href="#">CONTACT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-white" href="{{ url('/home') }}">LOGIN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  font-weight-bold text-white" href="{{ route('register') }}">REGISTER</a>
                  </li>                   
                </ul>
              </div>
          </div>
        </nav>
<!-- navbar -->

<!-- login dan legister -->
<!--         <div class="flex-center position-ref full-height"> -->
           <!--  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
<!-- login dan legister -->
<!-- jumbotron
                <div class="jumbotron">
                  <div class="container">
                      <h4 class="display-4" >EXPLORE YOUR SELF
                        <br>
                        <div class="with">WITH</div>
                        <br>
                        <div class="klik font-weight-bold">KlikBITNet</div></h4>

                      <hr class="my-4">
                      <p class="lead">Imajinasi Sehat Untuk Hidup Lebih Bebas Tanpa Batas</p>
                      <a class="btn btn-primary btn-md font-weight-bold" href="#" role="button">KUNJUNGI</a>
                  </div>
                </div>
batas jumbotron -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/1.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
              <h4 class="display-4" >EXPLORE YOUR SELF
              <br>
              <div class="with">WITH</div>
              <br>
              <div class="klik font-weight-bold">KlikBITNet</div></h4>
              <hr class="my-4">
              <p class="lead">Imajinasi Sehat Untuk Hidup Lebih Bebas Tanpa Batas</p>
            <a class="btn btn-primary btn-md font-weight-bold" href="#" role="button">KUNJUNGI</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/2.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
              <h4 class="display-4" >EXPLORE YOUR SELF
              <br>
              <div class="with">WITH</div>
              <br>
              <div class="klik font-weight-bold">KlikBITNet</div></h4>
              <hr class="my-4">
              <p class="lead">Imajinasi Sehat Untuk Hidup Lebih Bebas Tanpa Batas</p>
            <a class="btn btn-primary btn-md font-weight-bold" href="#" role="button">KUNJUNGI</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/3.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
              <h4 class="display-4" >EXPLORE YOUR SELF
              <br>
              <div class="with">WITH</div>
              <br>
              <div class="klik font-weight-bold">KlikBITNet</div></h4>
              <hr class="my-4">
              <p class="lead">Imajinasi Sehat Untuk Hidup Lebih Bebas Tanpa Batas</p>
            <a class="btn btn-primary btn-md font-weight-bold" href="#" role="button">KUNJUNGI</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>     




    </body>
</html>
