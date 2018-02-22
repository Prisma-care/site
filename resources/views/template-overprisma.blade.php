{{--
  Template Name: Over Prisma
  --}}

  @extends('layouts.simple')

  @section('content')

  <div id="team">
    <h1>Over Prisma</h1>

    <p class="lead">Een team van vrijwilligers met een hart voor ouderenzorg bouwt aan Prisma om zorgverleners te helpen om mensen met dementia de warme en persoonlijke zorg te kunnen geven die ze verdienen.</p>

    <p>Een team van studenten en ondernemers startte Prisma in 2017 na een stage van een maand in een woonzorgcentrum. <a href="http://www.frederikvincx.com/project-prisma-helping-people-with-dementia/">Lees het achtergrondverhaal</a>.</p>

    <p>Met de financiële hulp van de Vlaamse Gemeenschapscommissie werken we de app nu verder uit in nauwe samenwerking met woonzorgcentra. Daarbij hebben we de steun van <a href="http://www.dementie.be/">Expertisecentrum Dementie</a> en <a href="http://dementielab.be/">Dementie Lab</a>.</p>

    <p>Sociaal ondernemer <a href="https://www.linkedin.com/in/frederikvincx/">Frederik Vincx</a> leidt het project. Hij heeft een verleden als succesvol commercieel ontwerper en ondernemer, en hoopt nu een verschil te maken in de ouderenzorg.</p>

    <hr>

    <h3>Team Prisma</h3>

    <div class="row mt-5">

      <div class="person col-md-6 col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="@asset('images/avatar-frederik.jpg')" alt="Frederik Vincx" class="rounded-circle">
            <h4 class="card-title">Frederik Vincx </h4>
            <p class="card-text">Sociaal ondernemer <br> Brussel</p>

            <a href="https://www.linkedin.com/in/frederikvincx/"><i class="icon-linkedin-with-circle"></i></a>
            <a href="https://twitter.com/fritsbits"><i class="icon-twitter-with-circle"></i></a>
            <a href="https://github.com/fritsbits"><i class="icon-github"></i></a>
          </div>
        </div>
      </div>


      <div class="person col-md-6 col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="@asset('images/avatar-michiel.jpg')" alt="Michiel Leyman " class="rounded-circle">
            <h4 class="card-title">Michiel Leyman </h4>
            <p class="card-text">Student informatica <br> Brugge</p>

            <a href="https://www.linkedin.com/in/michiel-leyman/"><i class="icon-linkedin-with-circle"></i></a>
            <a href="https://twitter.com/michielleyman"><i class="icon-twitter-with-circle"></i></a>
            <a href="https://github.com/MichielLeyman"><i class="icon-github"></i></a>
          </div>
        </div>
      </div>


      <div class="person col-md-6 col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="@asset('images/avatar-thor.jpg')" alt="Thor Galle " class="rounded-circle">
            <h4 class="card-title">Thor Galle </h4>
            <p class="card-text">Student informatica &amp; innovatie <br> Leuven</p>

            <a href="https://www.linkedin.com/in/thorgalle/"><i class="icon-linkedin-with-circle"></i></a>
            <a href="https://twitter.com/th0rgall"><i class="icon-twitter-with-circle"></i></a>
            <a href="https://github.com/th0rgall"><i class="icon-github"></i></a>
          </div>
        </div>
      </div>

      <div class="person col-md-6 col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="@asset('images/avatar-gilbert.jpg')" alt="Gilbert West " class="rounded-circle">
            <h4 class="card-title">Gilbert West </h4>
            <p class="card-text">Ondernemer, IT adviseur <br>Brussel</p>

            <a href="https://www.linkedin.com/in/blueclock/"><i class="icon-linkedin-with-circle"></i></a>
            <a href="https://twitter.com/blueclock"><i class="icon-twitter-with-circle"></i></a>
            <a href="https://github.com/blueclock"><i class="icon-github"></i></a>
          </div>
        </div>
      </div>

      <div class="person col-md-6 col-lg-4">
        <div class="card">
          <div class="card-body">
            <img src="@asset('images/avatar-github.png')" alt="Github" class="rounded-circle">
            <h4 class="card-title">Jij?</h4>
            <p class="card-text">Bouw mee aan Prisma via <a href="https://github.com/prisma">Github</a></p>
          </div>
        </div>
      </div>

      <div class="person col-md-6 col-lg-4">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Contacteer het team</h4>
            <p class="card-text"><a href="mailto:info@prisma.care">info@prisma.care</a></p>
          </div>
        </div>
      </div>

    </div>

  </div>
  @endsection