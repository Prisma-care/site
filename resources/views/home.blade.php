@extends('layouts.app')

@section('content')

<section id="intro">

  <div class="container">
    <div class="row justify-content-md-center">

      <div class="col-lg-10 col-xl-8 text-center">

        <h1 class="h2">Prisma helpt mensen in woonzorgcentra om een goeie babbel te hebben.</h1>

        <br>

        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Xka4MPtLjoU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <h3>Beleef samen het kleurrijke verleden</h3>
        <p><a href="/aan-de-slag/">Prisma TV</a> is volledig gratis en beschikbaar voor alle toestellen.</p>
        <img src="@asset('images/devices.svg')" alt="Beschikbaar op gsm, tablet en computer" class="img-fluid">

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
      <div class="col-md-6 col-lg-5">
        <img src="@asset('images/tour5.jpg')" alt="Herbelef het verleden met jouw familie of in jouw woonzorgentrum" class="img-fluid">
      </div>

      <div class="col-md-6 col-lg-7">
        <h3>Voor jouw familie of woonzorgcentrum</h3>
        <p>Babbel samen over mooie fragmenten van de tijd van toen en geniet van de leuke herinneringen die naar boven komen.</p>
        <a class="btn btn-primary" href="/aan-de-slag/" role="button">Probeer het uit</a>
      </div>
    </section>

  </div>

  <hr>

  <div class="container">
    <section id="artikels">
      <br>

      @php $my_query = new WP_Query(['posts_per_page'=>1, 'post_status'=>'publish']); @endphp
      @while ($my_query->have_posts())

      @php $my_query->the_post(); @endphp

      <div class="row my-5">
        <div class="col-md-8 col-sm-8">
          <small class="text-uppercase mb-5">Update</small>
          <h3 class="mt-0 mb-1">
            <a href="{{ get_permalink() }}">{{ the_title() }}</a>
          </h3>
          <p class="d-none d-sm-none d-lg-block">{{ get_the_excerpt() }}</p>
          {{--<p>--}}
            {{--<a href="{{ get_permalink() }}">Lees verder</a>--}}
          {{--</p>--}}
        </div>

        <div class="col-md-4 col-sm-4">
          <img src="{{ get_the_post_thumbnail_url() }}" alt="" class="img-fluid">
        </div>
        
      </div>
      @endwhile
    </section>
  </div>

  @endsection
