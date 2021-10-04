<head>
    @include('common.backend.header')
    @yield('style')
</head>

<body class="w3-light-grey">

    @include('common.backend.menu')

    @yield('content')

    <!--Scripts-->
    @include('common.backend.scripts')

</body>
</html>
