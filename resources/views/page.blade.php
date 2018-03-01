@extends('layouts.simple')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="col-10">
        @include('partials.content-page')
    </div>
  @endwhile
@endsection
