<article class="col-xs-12 col-md-6 col-xl-4" @php(post_class())>

    <div class="floater-post">
    @if( has_post_thumbnail() )
    <div class="img-container">
      @php(the_post_thumbnail('medium'))
    </div>
    @endif
    <header>
      <h3 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h3>
      @include('partials/entry-meta')
    </header>
    <div class="entry-summary">
      @php(the_excerpt())
    </div>
  </div>
</article>
