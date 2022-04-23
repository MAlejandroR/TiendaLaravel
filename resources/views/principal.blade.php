@extends ("layout")

@section("menu")
    <x-ancla ref="{{route('productos.index')}}">Productos</x-ancla>
    <x-ancla ref="{{route('tiendas.index')}}"> Tiendas </x-ancla>
    <x-ancla ref="{{route('stocks.index')}}"> Stocks </x-ancla>
    <x-ancla ref="{{route('familias.index')}}"> Familias </x-ancla>
@endsection
@section("contenido")
    <h1>Listado de productos</h1>
@endsection
