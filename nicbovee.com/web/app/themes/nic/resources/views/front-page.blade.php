@extends('layouts.app')

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
  @while(have_posts()) @php(the_post())
    @include('partials.content')
  @endwhile
@endsection
