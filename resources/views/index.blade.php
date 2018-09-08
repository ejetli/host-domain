<!doctype html>
@include('partials.head')
    <body>
       <div id="app">

     @include('partials.nav')

        <div class="container">     

                @yield('content')
           
        </div>           
       </div>

   @include('partials.script')
        </body>
</html>
