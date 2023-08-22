<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
</head>
<header>
    @component('sistema.navbar')
    @endcomponent
</header>
<body>
    
    <main role="main">
        @hasSection('content')
            @yield('content')
        @endif
    </main>
    
</body>
</html>