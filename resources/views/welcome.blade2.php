<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KlikBITNet</title>
 
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <!-- <link rel="stylesheet" type="text/css" href="{{ asset('tampilan/jumbotron.css')}}"> -->
            <link rel="stylesheet" type="text/css" href="{{ asset('tampilan/navbar.css')}}">
            <link rel="stylesheet" type="text/css" href="{{ asset('tampilan/slider.css')}}">






  </head>

    <body id="page-top">
      <!-- navbar -->
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand" href="#page-top">
                <h3><SPAN class="klik">KLIKBITNET</SPAN>
                </h3>
              </a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                  <li class="">
                    <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                  </li>
                  <li class=" dropdown">
                    <a class="nav-link dropdown-toggle" href="#product" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      TUTORIAL
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">HTML</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">CSS</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">BOTSTRAP</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">JAVASCRIPT</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">DOM</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">PHP</a>
                    </div>
                 </li>
                  <li class="">
                    <a class="nav-link" href="#">ABOUT</a>
                  </li>
                  <li class="">
                    <a class="nav-link" href="#">CONTACT</a>
                  </li>
                  <li class="">
                    <a class="nav-link" href="{{ url('/home') }}">LOGIN</a>
                  </li>
                  <li class="">
                    <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
                  </li>                   
                </ul>
              </div>
          </div>
        </nav>
      <!-- navbar -->

<!-- slider -->
<<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="tampilan/img/slide3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="tampilan/img/slide2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="tampilan/img/slide1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- akhir slider -->







                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>     



    </body>
</html>
