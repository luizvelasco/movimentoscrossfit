<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

       
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.webp" alt="Movimentos do Crossfit">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Movimentos</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a href="/moviments/create" class="nav-link">Cadastrar Movimento</a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                           <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" 
                                    class="nav-link"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">Sair</a>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
   
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <p class="msg">{{ session ('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
    <footer>
        <p>Movimentos do Crossfit &copy; 2022</p>
    </footer>
    
    {{-- ION icons --}}
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
</html>
