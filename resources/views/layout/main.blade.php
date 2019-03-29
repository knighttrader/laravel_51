<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    @include('layout.head_part')
  </head>
  <body>

    @include('layout.nav_part')
    @include('layout.header_part')
    <div class="container">
      <div class="content">
        @yield('content')
      </div>
    </div>
    @include('layout.footer_part')
    @include('layout.script_part')

  </body>
</html>
