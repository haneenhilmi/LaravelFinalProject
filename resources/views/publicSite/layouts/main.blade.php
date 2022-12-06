<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Additional CSS Files -->
    @include('publicSite.includes.css')
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
   
    
    
    <!-- ***** Header Area Start ***** -->
    @include('publicSite.includes.header')
    <!-- ***** Header Area End ***** -->
    @yield('content')
    <!-- ***** Main Banner Area Start ***** -->
   
    
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
   
    <!-- ***** Men Area Ends ***** -->

    <!-- ***** Women Area Starts ***** -->
    
    <!-- ***** Women Area Ends ***** -->

    <!-- ***** Kids Area Starts ***** -->
   
    <!-- ***** Kids Area Ends ***** -->

    <!-- ***** Explore Area Starts ***** -->
    
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Social Area Starts ***** -->
    
    <!-- ***** Social Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    
    <!-- ***** Subscribe Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
 
    @include('publicSite.includes.footer')


    @include('publicSite.includes.js')
@yield('searchJs')
  </body>
</html>