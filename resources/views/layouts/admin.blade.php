@extends('layouts.app')

@section('body')
<body>
        <h1 style="text-align: center;"> API ARTICLES</h1>

        @yield('content')


        @yield('vuejs')


        <!-- VueJS -->
        <script src="{{ asset ('js/app.js') }}"></script>
    </body>
</html>

@endsection