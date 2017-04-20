<?php

namespace App\Http\Controllers;

use DB;
use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
     public function index()
    {

        #$productos = DB::table('productos')
        #->join('presentacion_farmacologicas', 'productos.presentacion_id', '=', 'presentacion_farmacologicas.id')
        #->join('laboratorios', 'productos.laboratorio_id', '=', 'laboratorios.id')
        #->join('modo_usos', 'productos.modo_uso_id', '=', 'modo_usos.id')
        #->select('productos.*', 'presentacion_farmacologicas.nombre_corto as pf_nombre','laboratorios.nombre as lab_nombre', 'modo_usos.uso')
        #->select('productos.*', 'presentacion_farmacologicas.nombre_corto as pf_nombre','modo_usos.uso')
        #->orderBy('productos.nombre')
        #->get();
        $productos = DB::select('SELECT p.nombre, p.concentracion, p.modo_uso_id, p.unidad_envase, p.precio_bodega, p.laboratorio_id, pf.nombre as pf_nombre
        FROM productos p, presentacion_farmacologicas pf
        WHERE p.presentacion_id = pf.id');
       
        return view('productos.index', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'laboratorios' => DB::table('laboratorios')->orderBy('nombre')->pluck('nombre', 'id'),
            'presentacions' => DB::table('presentacion_farmacologicas')->orderBy('nombre')->pluck('nombre', 'id'),
            'modo_usos' => DB::table('modo_usos')->orderBy('uso')->pluck('uso', 'id'),
        ];
        return view('productos.create', $relations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $laboratorio = Laboratorio::create($request->all());
        return redirect()->route('laboratorios.index');
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
