<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locales;
use App\Models\Tipo_comida;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LocalesController extends Controller
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
        $locales =  Locales::all();
        return view('Locales.index')->with('locales',$locales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //aca hacer el request de todos los tipos de comidas y se va mandar al formulario
   /* ['Comida arabe' => $request->Comida->arabe,
    'Comida armenia' => $request->Comida->armenia,
    'Comida asiatica' => $request->Comida->asiatica,
    'Comida china' => $request->Comida->china,
    'Comida italiana' => $request->Comida->italiana,
    'Comida francesa' => $request->Comida->francesa,
    'Comida mexicana' => $request->Comida->mexicana,
    'Comida peruana' => $request->Comida->peruana,
    'Comida vegana' => $request->Comida->vegana,
    'Comida vegetariana' => $request->Comida->vegetariana,
    'Comida paraguaya' => $request->Comida->paraguaya,
    ];*/
    $tipo_comida = Tipo_comida::all();
        return view('locales.create')->with('tipo_comida',$tipo_comida);
        //despues en tu formulario recorres esta variable asi como lo haces en los index pero
        // dentro de la etiqueta <form>@foreach(variable) --checkbox label= variable['descripcion']-- @endforeach</form>
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd(array_keys(array_filter($request->all(), function($v, $k){
            return $v == "on";
        }, ARRAY_FILTER_USE_BOTH)));
        $locales = Locales::create(
    ['id' => $request->id,
    'nombre_local' => $request->nombre_local,
    'telefono' => $request->telefono,
    'email' => $request->email,
    'tipo_negocio_id' => $request->tipo_negocio_id, 
    ]);
        
        $locales->save();
    $tipos_comida = array_keys(array_filter($request->all(), function($v, $k){
        return $v == "on";
    }, ARRAY_FILTER_USE_BOTH));
    $len = count($tipo_comida);
    for($i=0;$i<$len;$i++){
        $comida_local = new ComidaLocal();
        $comida_local->local_id = $locales->id;
        $comida_local->comida_id = $tipo_comida[$i];
        $comida_local->save();
    }
        return redirect('/locales');
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
        $locales =  Locales::find($id);
        return view('Locales.edit')->with('locales', $locales);
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
        $locales = Locales::find($id);
        $locales->nombre = $request->get('nombre_local');
        $locales->telefono = $request->get('telefono');
        $locales->email = $request->get('email');
        $locales->tipo_negocio_id = $request->get('tipo_negocio_id');

        $locales->save();
        
        return redirect()->route('Locales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $locales = Locales::find($id);
        $locales->delete();
      
        return redirect()->route('Locales.index');
    }
}
