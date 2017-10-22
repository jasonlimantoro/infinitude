<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Infinitude</title>
    {{--  Main css asset  --}}
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    {{--  Navigation  --}}
    @include('layouts.nav')


    <div class="container-fluid">
        {{--  Main Content  --}}
        @yield('content')

    </div>

    {{--  Footer  --}}
    @include('layouts.footer')
    
    {{--  Main js asset  --}}
    <script src="/js/app.js"></script>
    
    {{--  Specific Javascript file (if any)  --}}
    @yield('script')

</body>
</html>