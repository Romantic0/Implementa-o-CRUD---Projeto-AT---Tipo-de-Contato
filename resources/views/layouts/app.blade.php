<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Sistema')</title>
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">
</head>
<body>
    <header>
        <h1>Sistema de Tipos de Contato</h1>
    </header>

    <main>
        @yield('content')
    </main>

   
</body>
</html>
