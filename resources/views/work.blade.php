@extends('layouts.main')

@section('container')

    <div class="container">
        <p id="title">Works_</p>
        <p class="firstW"><b>My Creations</b></p>
        <p class="descs">Projects I've ever made. It's never been commercial,</p>
        <p class="descs"> but I'm trying to make it for practice.</p>
        
        <div class="left5">
            <img src="img/web.png" alt="" width="500">
        </div>
        <div class="right6">
            <p id="title">Personal Web</p>
            <p class="descss">I learned a lot to make this website using laravel and will continue to develop it by adding new features. <a class="ref" href="/feedback" target="_blank"><u>You can give suggestions, feedback, or suggest what features I should add.</u></a> I'll email you if I create a new feature.</p>
        </div>
        <p class="block">a</p>
        <p class="block">a</p>
        <p class="blocks">a</p>
        <p class="blocks">a</p>
        <hr>
        <div class="left5">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style="margin-left: 90px">
              <div class="carousel-item active">
                <img src="/img/cinema.jpg" alt="First slide" width="300">
              </div>
              <div class="carousel-item">
                <img  src="/img/cinema3.jpg" alt="Second slide" width="300">
              </div>
              <div class="carousel-item">
                <img  src="/img/cinema5.jpg" alt="Third slide" width="300">
              </div>
              <div class="carousel-item">
                <img src="/img/cinema2.jpg" alt="Third slide" width="300">
              </div>
              <div class="carousel-item">
                <img  src="/img/cinema4.jpg" alt="Third slide" width="300">
              </div>
              <div class="carousel-item">
                <img  src="/img/cinema6.jpg" alt="Third slide" width="300">
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
        <div class="right6">
            <p class="block">a</p>
            <p id="title">Atma Cinema</p>
            <p class="descss">This is a mobile application that I made with my friend for a 5th semester college assignment and is still being developed at this time. Coincidentally my group got a cinema friend this was great fun! <a class="ref" href="https://github.com/Gamdara/TUBES_4_BIOSKOP" target="_blank"><u>You can download the source code here.</u></a></p>
        </div>
        <p class="block">a</p>
        <p class="block">a</p>
        <p class="block">a</p>
        <p class="block">a</p>
        <p class="block">a</p>
        <p class="blocks">a</p>
        <p class="blocks">a</p>
        <p class="blocks">a</p>
        <hr>
        <div class="left5">
          <img src="img/numberGuessing.png" alt="" width="500">
        </div>
        <div class="right6">
          <p id="title">Number Guessing Game</p>
          <p class="descss">This is a simple number guessing game used for me to learn vuejs. You can try it <a class="ref" href="/vueJs/numberGuessing" target="_blank"><u>here.</u></a></p>
        </div>
        <p class="block">a</p>
        <p class="block">a</p>
        <p class="blocks">a</p>
        <p class="blocks">a</p>
        <hr>
        <div class="left5">
          <img src="img/perpustakaan.png" alt="" width="500">
        </div>
        <div class="right6">
          <p id="title">Perpustakaan Jalur Literasi</p>
          <p class="descss">Web project for a library that can manage books, borrow books, magazines and sell magazines as college assignments with pure php which I<a class="ref" href="/perpus" target="_blank"><u> then recreate with laravel.</u></a></p>
        </div>
        <p class="block">a</p>
        <p class="block">a</p>
        <p class="blocks">a</p>
        <p class="blocks">a</p>
        <hr>
        <div class="left5">
          <img src="img/vuetifiy.png" alt="" width="500">
        </div>
        <div class="right6">
          <p id="title">Todo List with Vuetify-vuecli</p>
          <p class="descss"><a class="ref" href="https://gentle-kheer-f31329.netlify.app/" target="_blank"><u> Simple Todo List with vuetify-vuecli.</u></a></p>
        </div>
        <p class="block">a</p>
        <p class="block">a</p>
        <p class="blocks">a</p>
        <p class="blocks">a</p>
        <p class="blocks">a</p>
        <hr>
    </div>
    <div class="contact">
      <p class="block">a</p>
      <p class="cont" style="cursor: pointer;" onclick="contact()">Contact Me>>></p>
    </div>
       
    
@endsection