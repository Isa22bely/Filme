<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Agenda</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    @component('navbar')
    @endcomponent
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-10">
                    @hasSection('content')
                        @yield('content')
                    @endif
                </div>
            </div>
        </div>
    </main>
    
    <footer class="footer mt-auto py-3 navbar-fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-10">
                    <p class="text-center"><span class="text-muted">Todos os direitos reservados a &copy;Copyright</span></p>
                </div>
            </div>
          
        </div>
    </footer>
    @hasSection ('javascript')
        @yield('javascript')
    @endif
</body>
</html>