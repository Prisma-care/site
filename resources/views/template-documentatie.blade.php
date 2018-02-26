{{--
  Template Name: Documentatie
  --}}

<?php
global $post;
$args = [
    'child_of'    => $post->ID,
    'parent'      => $post->ID,
    'sort_column' => 'menu_order',
];

$pages = get_pages( $args );

$ancestors = get_post_ancestors( $post->ID );
$level = count( get_post_ancestors( $post->ID ) ) + 1;
?>

@extends('layouts.simple')

@section('content')
    @while(have_posts()) @php(the_post())

    <h1>{{ the_title() }}</h1>
    @include('partials.content-page')

    @if($level == 1)
        <div class="row mb-5">
            @foreach($pages as $key => $page)
                    <a href="{{ get_permalink($page->ID) }}">
                        <div class="col-md-6 mb-5">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $page->post_title }}</h5>
                                    <p class="card-text">{{ $page->post_excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
            @endforeach
        </div>
        {{--@elseif($level == 2)--}}
        {{--<div class="row mb-5">--}}
        {{--@foreach($pages as $page)--}}
        {{--<ul class="newslist list-unstyled">--}}
        {{--<li>--}}
        {{--<h2 class="newslist__title"><a href="{{ get_permalink($page->ID) }}">{{ $page->post_title }}</a></h2>--}}
        {{--<div class="newslist__content mt-4">{{ $page->post_excerpt }} <a href="{{ get_permalink($page->ID) }}">Lees meer</a>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--@endforeach--}}
        {{--</div>--}}
    @endif

    @endwhile
@endsection
