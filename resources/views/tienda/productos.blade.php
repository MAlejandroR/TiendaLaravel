@extends ("layout")

@section("menu")
    <x-ancla ref="{{route('productos.create')}}">Añadir Producto</x-ancla>
    <x-ancla ref="{{route('tienda')}}"> Volver</x-ancla>
@endsection


@section("contenido")
    <div class="productos">
        <table>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
            </tr>
            @foreach($productos as $producto)
                <tr>
                    <td>{{$producto->nombre_corto}}</td>
                    <td>{{$producto->PVP}}</td>
                    <td>
                        <form action="{{route('cesta.add')}}" method="post">
                            @csrf
                            <input type="hidden" name="cod" value="{{$producto->cod}}">
                            <input type="submit" value="comprar">
                            <button type="submit"><i class="fa-solid fa-cart-shopping"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <div class="paginacion">
            {{$productos->links()}}
        </div>
    </div>
    <div class="cesta">
        <h1>Cesta de la compra</h1>
        @if(isset($compra))
            <h2>Actualmente tienes {{sizeof($compra)}} productos comprados</h2>
            @foreach($compra as $producto => $unidades)
                <h2> {{$producto}} => {{$unidades}} unidades</h2>
            @endforeach
        @else
            <h1>La cesta está vacío</h1>
        @endif
    </div>
@endsection
