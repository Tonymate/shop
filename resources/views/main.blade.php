<!doctype html>
<html lang="en">
  <head>
    @include('partials._head')<!--HEAD PARTIAL-->
  </head>

  <body>

    @include('partials._nav')<!--NAVBAR PARTIAL-->

    @yield('content')<!--CONTENT LAYOUT-->

    @include('partials._footer')<!--FOOTER PARTIAL-->

    @include('partials._javascript')<!--JAVASCRIPT PARTIAL-->

  </body>
</html>