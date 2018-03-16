{{--
  Template Name: Artikels
  --}}

  @extends('layouts.simple')

  @section('content')

  @php $my_query = new WP_Query(array('posts_per_page'=>-1, 'post_status'=>'publish')); @endphp

  <div class="col-10">
    <ul class="newslist list-unstyled">

      @while ($my_query->have_posts())

      @php $my_query->the_post(); @endphp

      <li>
        <div class="row">
          <div class="col-md-8 col-sm-8">
            <h2 class="newslist__title"><a href="{{ get_permalink() }}">{{ the_title() }}</a></h2>
            <span class="newslist__date">{{ the_time('j M y') }}</span>
            <div class="newslist__content mt-4 d-none d-sm-none d-lg-block">{{ the_excerpt() }} <a href="{{ get_permalink() }}">Lees meer</a></div>
          </div>

          <div class="col-md-4 col-sm-4">
            <img src="{{ get_the_post_thumbnail_url() }}" alt="" class="img-fluid">
          </div>

        </div>

      </li>

      @endwhile

    </ul>
  </div>

  @endsection