<header class="banner">
  <div class="container">
    <nav class="navbar navbar-expand-md navbar-dark" role="navigation">
      @if (the_custom_logo('custom-logo'))@endif
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon-2"><i class="fa fa-bars"></i></span>
      </button>
      @if (has_nav_menu('primary_navigation'))
        {{-- {!! wp_nav_menu($primaryMenu) !!} --}}
        {!! wp_nav_menu([
        'theme_location' => 'primary_navigation',
        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'menu_class'      => 'navbar-nav mr-auto',
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
        'walker' => new \App\wp_bootstrap5_navwalker()
        ])!!}
      @endif
    </nav>
  </div>
</header>
