<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

<div class="content-wrapper">
  <main id="main" class="main">

    <div class="container-main">
      <div class="row">
        <div class="col">
          @yield('content')
        </div>
      </div>
    </div>
  </main>

</div>

@include('sections.footer')
