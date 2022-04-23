@extends ("layout")

@content("menu")
<a href="tienda">Nueva Tienda</a>
@content("contenido")
<table>
    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        e
    </tr>
    @foreach($tiendas as $tienda)
        <tr>
            <td>{{$tienda->nombre}}</td>
            <td>{{$tienda->telefono}}</td>
        </tr>
    @endforeach
</table>
@endsection
