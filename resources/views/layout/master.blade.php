<!DOCTYPE html>
<html>
  @include('partials.head')
  <body>
    @include('partials.header')
    @yield('page')
    <script src="https://code.jquery.com/jquery-1.11.3.min.js" charset="utf-8"></script>
    <script src="{{asset('js/master.js')}}" charset="utf-8"></script>
  </body>
</html>
