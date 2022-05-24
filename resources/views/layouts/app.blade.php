@include('layouts.inc._header')

<body class="common-home res layout-home5"  id="app">
    <div id="wrapper" class="wrapper-full banners-effect-7 ">

        @include('layouts.inc._navbar')
        @include('partials._session')

        <div class="main-container  layout-boxed">
            @yield('content')
        </div>

    </div>

    @include('layouts.inc._footer')

</body>

</html>
