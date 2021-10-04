<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('common/topNav')
</head>
<body>
    <div id="page">
        @include('common.header')

        @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        @yield('content')
        <!-- Include footer here for v2-->
        
        @include('common/mobileMenu')
        @include('common/script')
    </div>
    <!--end of page-->
</body>
</html>

