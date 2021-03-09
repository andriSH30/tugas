<!doctype html>
<html lang="en">
  <head>
    @include('components.header')
  </head>
  <body>
    @include('components.navbar')

    @yield('konten')

    @yield('modal')

    @include('components.scripts')
  </body>
  <footer>
    @include('components.footer')
  </footer>
</html>
