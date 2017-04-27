<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    @yield('front-hero')
    <div class="wrap container-fluid" role="document">
        <main class="main container posts">
          @yield('posts')
          <div class="row">
              @yield('content')
          </div>
            <aside class="sidebar row">
              @include('partials.sidebar')
            </aside>
        </main>


      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
