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
</head>
<body class="m-4">
<header>
    <img class="max-w-full max-h-full" src="{{asset("images/logo.png")}}" alt="logo">
    <h1 class="max-h-full text-6xl text-red-700">Tienda de componentes</h1>

    <div class="logueo">
        @auth
            <h3>Usuario {{auth()->user()->name}}</h3>
            <form action="{{route("logout")}}" method="post">
                <x-button>
                    Logout
                </x-button>
            </form>

        @endauth
        @guest
                <x-ancla ref='{{route("login")}}' >
                    Login
                </x-ancla>
                <x-ancla ref='{{route("register")}}' >
                    Registrarse
                </x-ancla>
        @endguest
    </div>

</header>
<nav >
    @yield("menu")
</nav>
<main >
    @yield("contenido")
</main>
<footer >
    @ pie de página
</footer>


</body>
</html>
