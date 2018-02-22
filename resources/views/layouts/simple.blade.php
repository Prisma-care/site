<!doctype html>
<html @php(language_attributes())>
@include('partials.head')
<body @php(body_class())>
  @php(do_action('get_header'))
  @include('partials.header')
  <div class="wrap" role="document">
    <main class="main container">
      <div class="row justify-content-md-center">
        <div class="col-lg-10 col-xl-8">

          @yield('content')

        </div>
      </div>
    </main>
  </div>
  @include('partials.navigation')
  @php(do_action('get_footer'))
  @include('partials.footer')
  @php(wp_footer())
</body>
</html>
