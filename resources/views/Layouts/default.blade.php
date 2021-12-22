<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    @include('partials.header_scripts')
</head>
<body>
    {{-- HEADER --}}
    @include('partials.header')
    {{-- MAIN --}}
    <main>
        @yield('contenuto')
    </main>
    {{-- FOOTER --}}
    @include('partials.footer')
    
</body>
</html>