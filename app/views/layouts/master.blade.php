<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css" media="screen,projection">

    @yield('topscript')

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    </head>
    <body>

    @include('partials.navbar')

    <main class="container">
        @yield('content')
    </main>

    {{-- Import jQuery from CDN --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

    <!-- Compiled and minified JavaScript for Materialize css library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>

    <!-- Google Analytics: todo change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

    @yield('bottomscript')

    </body>
</html>
