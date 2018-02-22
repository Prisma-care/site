{{--
  Template Name: Artikels
--}}

@extends('layouts.simple')

@section('content')

  @php $my_query = new WP_Query(array('posts_per_page'=>-1, 'post_status'=>'publish')); @endphp

  <ul class="newslist list-unstyled">
  
  @while ($my_query->have_posts()) 

    @php $my_query->the_post(); @endphp
  
    <li>
      <h2 class="newslist__title"><a href="{{ get_permalink() }}">{{ the_title() }}</a></h2>
      <span class="newslist__date">{{ the_time('j M y') }}</span>
      <div class="newslist__content mt-4">{{ the_excerpt() }} <a href="{{ get_permalink() }}">Lees meer</a></div>
    </li>

    @endwhile

  </ul>

@endsection