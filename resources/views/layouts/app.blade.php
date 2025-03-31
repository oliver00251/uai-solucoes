<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Uai Soluções') }}</title>

    <!-- Links para CSS do Bootstrap ou de outras bibliotecas -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Aqui você pode adicionar outros links de fontes ou frameworks -->
    <style>
        body {
            background: linear-gradient(219deg, #1B59E2, #6f9cfd);
        }
        .btn-custom {
            background-color: #1B59E2;
            color: white;
            border: none;
        }
        .btn-custom:hover {
            background-color: #164ea6;
        }
        /* Outros estilos personalizados */
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Uai Soluções</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/sobre') }}">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/servicos') }}">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contato') }}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class=" mt-5">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@include('estilo-site')
</body>
</html>
