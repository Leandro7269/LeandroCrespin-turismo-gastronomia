<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_comida;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Tipo_comidaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_comida =  Tipo_comida::all();
        return view('Tipo_comida.index')->with('tipo_comida',$tipo_comida);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tipo_comida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_comida = Tipo_comida::create(
    ['nombre' => $request->nombre,
    'descripcion' => $request->descripcion,    
    ]);
        
        $tipo_comida->save();

        return redirect('/tipo_comida');
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
        $tipo_comida =  Tipo_comida::find($id);
        return view('Tipo_comida.edit')->with('tipo_comida', $tipo_comida);
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
        $tipo_comida = Tipo_comida::find($id);
        $tipo_comida->nombre = $request->get('nombre');
        $tipo_comida->descripcion = $request->get('descripcion');

        $tipo_comida->save();

        return redirect()->route('tipo_comida.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_comida = Tipo_comida::find($id);
        $tipo_comida->delete();
      
        return redirect()->route('tipo_comida.index');
    }
}
