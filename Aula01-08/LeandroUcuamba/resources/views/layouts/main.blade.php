<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- link css -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
        
        <!-- link bootstrap -->
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                       <img src="/img/logo.png" alt="Unia Eventos">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Criar eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')
    <footer>
        <p>Unia Eventos &copy; 2022</p>
    </footer>

       <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>