
<!doctype html>
<html>
    <head>
        <link href="{{ asset('style_pdf/pdf.css') }}" rel="stylesheet">

        <!-- Custom Fonts -->
        <script src="https://use.fontawesome.com/6c0061b9d1.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded|Open+Sans" rel="stylesheet">

    </head>
    <body>

        <div class="first_page">
            <div class="page">
                <h1>Curriculum Vitae</h1>
                <p class="first_page_employee">
                    {{ $employee->full_name }}
                    <br>
                    <span class="small">
                        {{ $employee->birth_date->format('d-m-Y') }}
                    </span>
                </p>
            </div>
        </div>

        <div class="page_seperator"></div>

        <header>
            <img class="logo" src="img/fdit.jpg" alt="">
        </header>

        <footer>footer on each page</footer>

        <div id="main">
            @yield('content')
        </div>

    </body>
</html>
