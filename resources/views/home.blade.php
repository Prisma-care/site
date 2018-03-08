@extends('layouts.app')

@section('content')

<section id="intro">

  <div class="container">
    <div class="row justify-content-md-center">

      <div class="col-lg-10 col-xl-8 text-center">

        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Xka4MPtLjoU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>  

        <br>
        <p class="lead">De gratis Prisma app helpt mensen met dementie, hun geliefden en verzorgers om een goeie babbel te hebben.</p>

        <a href="https://play.google.com/store/apps/details?id=care.prisma.familyapp"><img src="@asset('images/cta-googleplay.png')" alt="Download de app op Google Play" class="playstore-link mt-4 mb-3"></a> 
        <p class="small">De iPhone en iPad versie komt er aan</p>
      </div>

    </div>

  </div>

</section>


<div class="container">
  <section id="tour">
    <div class="row">
      <div class="col-md-6 col-lg-5">
        <h3>Laat je inspireren door verhalen van vroeger en nu</h3>
        <p>Hoe was het dagelijkse leven 50 jaar geleden? Wat aten we? Welke grote momenten herinneren we ons nog? Prisma heeft een grote verzameling inspirerende verhalen.</p>

        <ul class="list-inline">
          <li class="list-inline-item"><img src="@asset('images/logo-vrt-compact.png')" alt="VRT sandbox" class="img-fluid"></li>
          <li class="list-inline-item"><img src="@asset('images/logo-alijn-compact.png')" alt="Het Huis van Alijn" class="img-fluid"></li>
        </ul>

      </div>
      <div class="col-md-6 col-lg-7">
        <img src="@asset('images/tour4.jpg')" alt="Laat je inspireren door verhalen van vroeger en nu" class="img-fluid">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-7">
        <img src="@asset('images/tour2.jpg')" alt="Bewaar jullie herinneringen in een digitaal fotoalbum" class="img-fluid">
      </div>
      <div class="col-md-6 col-lg-5">
        <h3>Bewaar herinneringen in een digitaal fotoalbum</h3>
        <p>In de Prisma app heb je als familie een cruciale rol als verhaalverteller. Sla met je smartphone en tablet familie foto's veilig op in een privé archief.</p>
      </div>
    </div>

  </section>

</div>


<section id="download">

  <h2 class="mb-1 text-center">Hoe werkt de app?</h2>
  <p class="lead text-center mb-5">Bekijk de video</p>

  <div class="container">
    <div class="row justify-content-md-center">

      <div class="col-lg-10 col-xl-8 text-center">

        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="//www.youtube.com/embed/KrOCPZn8g44?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>

        <a href="https://play.google.com/store/apps/details?id=care.prisma.familyapp"><img src="@asset('images/cta-googleplay.png')" alt="Download de app op Google Play" class="playstore-link mt-5"></a>

        <p class="small">Binnenkort beschikbaar voor iPhone en iPad. <br>
          <a href="#mce-EMAIL">Blijf op de hoogte</a>.</p>

        </div>
      </div>
    </div>

  </section>

  @endsection
