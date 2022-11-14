@extends('layouts.main')

@section('container')
    <div class="left">
      <div class="top">
        <p class="first">Hai! :)</p>
        <p class="second"><b>WELCOME TO MY WEBSITE</b></p>
      </div>
      <div class="bot">
        <p class="third">This website is developed with laravel, bootstrap, php, html, css, and javascript.</p>
        <p class="third">By <b>Paulus Pandu Windito-2022</b></p>
      </div>
      <p>
        <i class="arrow down"></i>
      </p>
    </div>

    <div class="right">
        <p class="secondR"><b>PROGRAMMER</b></p>
        <p class="thirdR"><b>WEB</b></p>
        <p class="thirdR"><b>DEVELOPER_</b></p>  
    </div>

  <section>
    <div>
      <div class="rectangle"></div>
      <div class="elem">
        <div class="text-block">
          <p class="block">aaaaaa</p>
          <p class="block"></p>
          <h2 class="mb-0 mb-01">My Dream Car</h2>
          <h5 class="mb-0">Hyundai Ioniq 5</h5>
          <p class="mb-0">The first vehicle built on Hyundai’s new Electric-Global Modular Platform (E-GMP). This dedicated battery electric vehicle platform enables faster charging, increased driving range, more interior space, and better handling. The battery pack’s position within the wheelbase ensures ideal weight distribution between the front and rear and a low center of gravity for improved handling performance.</p>
          <a class="mb-0" href="https://www.hyundai.com/worldwide/en/eco/ioniq5/highlights" target="_blank">More...</a>
        </div>
      </div>
    </div>
  </section>

  <section class="data" class="section">
    <div class="row no-gutters">
      <div class="col">
        <div class="elem">
          <div class="zoom">
            <a href="https://www.hyundai.com/worldwide/en/eco/ioniq5/highlights" target="_blank">
              <img src="/img/ioniq5.jpg" class="img-fluid" alt="Responsive image"/>
            </a> 
          </div>
        </div>
      </div>
    </div>
  </section>

  <div>
    <div class="rectangle"></div>
      <div class="elem">
        <div class="text-block">
          <h2 class="mb-0 mb-01">Golden State Warriors</h2>
          <h5 class="mb-0">Basketball Team</h5>
          <p class="mb-0">The Golden State Warriors are an American professional basketball team based in San Francisco. The Warriors compete in the National Basketball Association, as a member of the league's Western Conference Pacific Division.</p>
          <a class="mb-0" href="https://www.nba.com/warriors" target="_blank">More...</a>
          <p class="block">a</p>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="/img/gsw1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/gsw2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/gsw3.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/gsw4.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/gsw5.jpg" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/img/gsw6.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="contact">
      <p class="cont" style="cursor: pointer;" onclick="about()">About Me>>></p>
    </div>
@endsection


        
