@extends('layouts.app')

@section('header')
  <header class="single-banner">
    @include('partials/header')
  </header>
@endsection

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials/content-single-'.get_post_type())
  @endwhile
@endsection

@section('container')
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
@endsection('container')
