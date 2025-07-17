<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Meu Projeto</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Seus assets compilados pelo Vite -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <!-- HEADER -->
    <header class="p-3 text-bg-primary">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <!-- Logo -->
                <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <!-- Menu -->
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="{{ route('user.index')}}" class="nav-link px-2 text-white">Home</a></li>
                    <li><a href="{{ route('user.index')}}" class="nav-link px-2 text-white">Usuários</a></li>
                </ul>

                <!-- Botões -->
                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2">Login</button>
              
                </div>
            </div>
        </div>
    </header>

    <!-- Container para o conteúdo dinâmico das views -->
    <div class="container my-4">
        @yield('content')
    </div>

    <!-- Ícone do Bootstrap (usado no <svg>) -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill="currentColor" d="M..." />
        </symbol>
    </svg>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
