<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

@include('sections.header')

  <main id="main" class="main">

    <div class="container">
      <div class="row">
        <div class="col">
          @yield('content')
        </div>
        <div class="col">

          @hasSection('sidebar')
          <aside class="sidebar">
            @yield('sidebar')
          </aside>
          @endif

        </div>
      </div>
    </div>
  </main>



@include('sections.footer')
