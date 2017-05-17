@extends('layouts.app')

  @section('header')
    <header class="banner">
      @include('partials/header')
    </header>
  @endsection

  @section('front-hero')
    @include('partials.front-hero')
  @endsection

  @section('posts')
  <div class="row latest-posts">
      <h2>Latest posts</h2>
   <hr>
  </div>
  @endsection

  @section('content')
  <main class="wrap main container posts">
    @yield('posts')
    <div class="row">
      @while(have_posts()) @php(the_post())
        @include('partials.content')
      @endwhile
    </div>
      <aside class="sidebar row">
        @include('partials.sidebar')
      </aside>
  </main>
      <a class="nb-btn" href="#">More Posts</a>
  @endsection
