<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    @stack('js')

</body>
</html>