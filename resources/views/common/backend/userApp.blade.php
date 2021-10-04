<head>
    @include('common.backend.header')
    @yield('style')
</head>

<body class="w3-light-grey">

@include('common.backend.menu')
@yield('content')

@include('common.backend.scripts')
</body>
</html>
