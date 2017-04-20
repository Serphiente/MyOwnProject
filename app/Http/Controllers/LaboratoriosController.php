<?php

namespace App\Http\Controllers;

use DB;
use App\Laboratorio;
use Illuminate\Http\Request;

class LaboratoriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        #$laboratorios = DB::select('SELECT * FROM laboratorios l, comunas c WHERE l.ciudad_id = c.id');
        #$laboratorios = DB::table('laboratorios')->get();
        $laboratorios = DB::table('laboratorios')
        ->join('comunas', 'comunas.id', '=', 'laboratorios.ciudad_id')
        ->select('laboratorios.*', 'comunas.nombre as nombre_comuna')
        ->orderBy('comunas.nombre')
        ->get();
       
        return view('laboratorios.index', ['laboratorios' => $laboratorios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $comunas = DB::table('comunas')->get();
         $comunas_array = array();
         foreach($comunas as $c){
            #$productos_array[$p->id] =$p->id . " " . ucwords($p->producto_id)." ".ucwords($p->concentracion . " Caja x " . $p->unidad_envase . " | Lote: ". $p->lote. " | FV: " . $p->fecha_vencimiento);
            $comunas_array[$c->id] = ucwords($c->nombre);
        }
        $relations = [
            
           'comunas' => $comunas_array,
            #'productos' => \App\Recepcionmercaderium::get()->pluck('lote', 'id')->prepend('Please select', ''),
        ];
         return view('laboratorios.create',  $relations);
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
