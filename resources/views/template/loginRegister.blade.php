<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') - Doppelherz</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <!-- Plugins -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Base CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/normalize.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/variables.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}" />
    @yield('style')
</head>

<body>
    <div class="wrapper">
        @include('template.partials.header-loginRegister')

        <main id="main_layout">
            @yield('main_section')
        </main>

        @include('template.partials.footer')
    </div>

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Plugins -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Base JS -->
    <script type="text/javascript" src="{{ asset('/assets/js/style.js') }}"></script>

    @yield('scripts')

</body>

</html>
