@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
  
  @endif

  {!! get_the_posts_navigation() !!}
@endsection
