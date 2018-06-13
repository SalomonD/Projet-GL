<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Smart Career a Banking Category Bootstrap responsive Website Template  | Home :: W3layouts</title>
        <!-- Meta-Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Smart Career Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
                Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
        <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); }
        </script>

        <!-- //Meta-Tags -->
        @include('layouts.partials._css')
        @yield('other_css')



    </head>
    <body>
        @yield('banner')

        @yield('content')

        @include('layouts.partials._footer')

        @include('layouts.partials._js')

        @yield('other_js')
    </body>
</html>