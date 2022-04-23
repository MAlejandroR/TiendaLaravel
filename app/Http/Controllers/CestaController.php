<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCestaRequest;
use App\Http\Requests\UpdateCestaRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class CestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {


        echo "<h1>hola</h1>";
        $carrito = session("carrito")??[];

        $cod_producto = $request->cod;
        if (isset($carrito[$cod_producto]))
            $carrito[$cod_producto]++;
        else
            $carrito[$cod_producto]=1;

        session(["carrito"=>$carrito]);

        //
        $productos = Producto::paginate(10);
        $compra =[];
        foreach ($carrito as $cod => $unidades) {
            $nombre = Producto::where("cod", $cod)->get("nombre_corto")->first()->nombre_corto;
            $compra[$nombre]=$unidades;
        }
        return view("tienda.productos", ['productos'=>$productos,'compra'=>$compra]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
