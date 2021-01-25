<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-symbol-route_layout</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <div class="container">
       @include('components.header')

        <main>
            @yield('content')
        </main>

        @include('components.footer')

        
    
    
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>