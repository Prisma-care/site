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

    <div class="col-8">
        <h1>{{ the_title() }}</h1>
        @include('partials.content-page')
    </div>

    @if($level == 1)
        <div class="col-4">
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
    @endif

    @endwhile
@endsection
