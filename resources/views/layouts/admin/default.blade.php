<!doctype html>
<html>
<head>
    @include('includes.admin.head')
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

        @include('includes.admin.header')
        @include('includes.admin.menu')

    </nav>

    @yield('content')


    <footer class="row">
    </footer>

</body>
</html>
