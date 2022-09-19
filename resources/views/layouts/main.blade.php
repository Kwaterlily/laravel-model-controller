<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ env('APP_NAME') }} | @yield('title', 'Laravel Model Controller')</title>

    @yield('cdns')

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />

    {{-- JS --}}
    <script defer src="{{ asset('js/app.js')}}"></script>
</head>
<body>
  @include('includes.header')
    <main class="mt-3">
        <div class="container">
            @yield('main-content')
        </div>
    </main>
</body>
</html>