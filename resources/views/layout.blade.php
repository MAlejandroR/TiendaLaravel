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
<body >
<header class="bg-header h-15v">

{{--    <img class="max-w-full max-h-full" src="{{asset("images/logo1.png")}}" alt="logo">--}}
{{--    <h1 class="max-h-full text-6xl text-red-700">Tienda de componentes</h1>--}}
{{--    <div class="logueo">--}}
{{--        @auth--}}
{{--            <h3>Usuario {{auth()->user()->name}}</h3>--}}
{{--            <form action="{{route("logout")}}" method="post">--}}
{{--                <x-button>--}}
{{--                    Logout--}}
{{--                </x-button>--}}
{{--            </form>--}}

{{--        @endauth--}}
{{--        @guest--}}
{{--                <x-ancla ref='{{route("login")}}' >--}}
{{--                    Login--}}
{{--                </x-ancla>--}}
{{--                <x-ancla ref='{{route("register")}}' >--}}
{{--                    Registrarse--}}
{{--                </x-ancla>--}}
{{--        @endguest--}}
{{--    </div>--}}
</header>
<nav  class="bg-nav h-10v">
    @yield("menu")
</nav>
<main  class="bg-main h-65v">
    @yield("contenido")
</main>
<footer  class="h-10v bg-footer">
    @ pie de página
</footer>


</body>
</html>
