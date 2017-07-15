@yield('head')
    <body>

        <header style="background-image: linear-gradient( rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7)) ,url({{App\page::find(0)->images->get(0)->path}});">

           @yield('header')

       </header>

       @yield('body')

       <footer >

            @yield('footer')

       </footer>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script src="vendors/js/jquery.waypoints.min.js"></script>
       <script src="resources/js/script.js"></script>


    </body>


</html>
