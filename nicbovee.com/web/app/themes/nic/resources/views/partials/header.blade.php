<header class="banner">
<nav class="navbar navbar-toggleable-md ">
  <div class="collapse navbar-collapse" id="navbarToggler">
    <a href="{{ home_url('/') }}" class="navbar-brand"></a>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav', 'walker' => new WP_Bootstrap_Navwalker()]) !!}
      @endif
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <div class="navbar-toggler-icon">
      <div class="nav-line"></div>
      <div class="nav-line"></div>
      <div class="nav-line"></div>
    </div>
  </button>
</nav>
</header>
