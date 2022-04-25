@extends ("layout")


@section("menu")
    @auth()
        <x-ancla ref="{{route('productos.index')}}">Productos</x-ancla>
        <x-ancla ref="{{route('tiendas.index')}}"> Tiendas</x-ancla>
        <x-ancla ref="{{route('stocks.index')}}"> Stocks</x-ancla>
        <x-ancla ref="{{route('familias.index')}}"> Familias</x-ancla>
    @endauth()
@endsection
@section("contenido")

@endsection
