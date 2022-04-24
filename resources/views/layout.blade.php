<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</head>
<body>
<header class="bg-header h-15v flex flex-row justify-between items-center p-8">


    <img class="max-h-full" src="{{asset("images/logo1.png")}}" alt="logo">
    <h1 class="max-h-full text-6xl text-red-100">Tienda de componentes</h1>
    <div class="logueo">
        @auth
            <h3>Usuario {{auth()->user()->name}}</h3>
            <form action="{{route("logout")}}" method="post">
                @csrf
                <x-button>
                    Logout
                </x-button>
            </form>

        @endauth
        @guest

            <form action="{{route('login')}}" method="POST">
                @csrf
                <x-input type="text" value="{{old('email')}}" name="email" class="text-xs" size="10"  placeholder="email"/>
                <x-input type="text" name="password" class="text-xs" size="10" placeholder="password"/>
                <br><br>
                <x-button>Login</x-button>
                <x-ancla ref='{{route("register")}}'>
                    Registrarse
                </x-ancla>
                @if ($errors->any())
                    <div>Datos incorrectos, vuévelo a intentar</div>
                @endif
            </form>
        @endguest
    </div>
</header>
<nav class="bg-nav h-10v">
    @yield("menu")
</nav>
<main class="bg-main h-65v flex flex-col">
    @yield("contenido")
</main>
<footer class="h-10v bg-footer">
    @ pie de página
</footer>


</body>
</html>
