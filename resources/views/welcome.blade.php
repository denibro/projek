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
            <link rel="stylesheet" type="text/css" href="{{ asset('tampilan/about.css')}}">
            <link rel="stylesheet" type="text/css" href="{{ asset('tampilan/portfolio.css')}}">
            <link rel="stylesheet" type="text/css" href="{{ asset('tampilan/contact.css')}}">
            <link rel="stylesheet" type="text/css" href="{{ asset('tampilan/footer.css')}}">






  </head>

    <body>
<!-- navbar -->

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
      <a class="navbar-brand" href="#">KLIKBITNET</a> 
      <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"   aria-haspopup="true" aria-expanded="false">
                 PROCUCT
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">PROCUCT 1</a>
                <div class="dropdown-divider"></div>                
                <a class="dropdown-item" href="#">PROCUCT 2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">PROCUCT 3</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">PROCUCT 4</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">PROCUCT 5</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PORTFOLIO</a>
            </li>              
            <li><a href="{{ url('/home') }}" class="nav-link">LOGIN</a></li>
            <li><a href="{{ route('register') }}" class="nav-link">REGISTER</a></li>
          </ul>
        </div>
  </div>
</nav>

<!-- akhir navbar -->



  

<!-- slider -->
<div id="carouselExampleCaptions" class="carousel slide slider" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/tampilan/img/slider/slide3.jpg" class="d-block w-100 gambar-slider" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/tampilan/img/slider/slide2.jpg" class="d-block w-100 gambar-slider" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/tampilan/img/slider/slide1.jpg" class="d-block w-100 gambar-slider" alt="...">
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

<div class="container">
<!-- about -->
<section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class = "text-center">About</h2>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <p class="text-justify">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          <br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          <br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="col-sm-6">
        <p class="text-justify">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          <br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          <br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>    
    </div>
  </div>
</section>
<!-- akhir about -->

<!-- portfolio -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <h2 class="port">Portfolio</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
          <a href="1" class="thumbnail">
            <img src="/tampilan/img/portfolio/pertama.jpg" alt="" class="img-thumbnail">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="1" class="thumbnail">
            <img src="/tampilan/img/portfolio/kedua.jpg" alt="" class="img-thumbnail">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="1" class="thumbnail">
            <img src="/tampilan/img/portfolio/ketiga.jpg" alt="" class="img-thumbnail">
          </a>
        </div>
        <br>
        <div class="col-sm-4">
          <a href="1" class="thumbnail">
            <img src="/tampilan/img/portfolio/empat.jpg" alt="" class="img-thumbnail">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="1" class="thumbnail">
            <img src="/tampilan/img/portfolio/lima.jpg" alt="" class="img-thumbnail">
          </a>
        </div>
        <div class="col-sm-4">
          <a href="1" class="thumbnail">
            <img src="/tampilan/img/portfolio/enam.jpg" alt="" class="img-thumbnail">
          </a>
        </div>
      </div>
    </div>
  </section>

<!-- akhir portfolio -->

<!-- contact -->
<section class="contact" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p></p>
        <h2 class = "text-center">Contact</h2>
        <hr>
        <div class="text-center">
          Email : deninurnov@gmail.com
          <br>
          Telp  : 087778385501
        </div>
      </div>
    </div>
  </div>
</section>
<!-- akhir contact -->
</div>




<!-- footer -->
 <footer>
   <div class="container text-center">
    <div class="row">
      <div class="col-sm-12">
        <p>
          &copy; Copyright 2020 | built by
          <a href="">DeniDew</a>
            <i>
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-right-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M5.172 10.828a.5.5 0 0 0 .707 0l4.096-4.096V9.5a.5.5 0 1 0 1 0V5.525a.5.5 0 0 0-.5-.5H6.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
</svg>
</svg>
            </i>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="" class="btn btn-danger"><i>
         </i>Subcribe to Youtube </a>
      </div>
    </div>
   </div>
 </footer>
<!-- akhir footer -->






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>     



    </body>
</html>
