<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @stack('css')
</head>
<body>
    <div class="container">
        @include('partials.nav')
    </div>

    @yield('content')


{{--    @if($env === 'production')--}}
{{--        asflasdkfjlksd--}}
{{--        asdfklas--}}
{{--    @else--}}
{{--        --}}
{{--    @endif--}}

{{--    @foreach($users as $user)--}}
{{--        --}}
{{--    @endforeach--}}

{{--    @switch(asfksd)--}}
{{--        @case(1)--}}
{{--        --}}
{{--        @case(2)--}}
{{--    @endswitch--}}

{{--    @forelse($users as $user)--}}
{{--        --}}
{{--    @empty--}}
{{--        --}}
{{--    @endforelse--}}
{{--    --}}
{{--    @includeFirst('view1', 'view2', 'view2')--}}
{{--    --}}
{{--    @php--}}
{{--        $abc = 'xyz';--}}
{{--    @endphp--}}

{{--    --}}
{{--    @auth--}}
{{--    @endauth--}}
{{--    --}}
{{--    @guest--}}
{{--        --}}
{{--    @endguest--}}

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @stack('js')

</body>
</html>