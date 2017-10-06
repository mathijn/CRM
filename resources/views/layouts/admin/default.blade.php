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

    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- /.container-fluid -->
                <div class="col-lg-10">
                    @yield('content')
                </div>
            </div>
        <!-- /#page-wrapper -->
        </div>


    <footer class="row wrapper">
        @include('includes.admin.footer')
    </footer>

</body>
</html>
