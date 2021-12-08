<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_negocio;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class Tipo_negocioController extends Controller
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
        $tipo_negocio =  Tipo_negocio::whereNull ('deleted_at')->get ();
        return view('Tipo_negocio.index')->with('tipo_negocio',$tipo_negocio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_negocio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_negocio = Tipo_negocio::create(
            ['id' => $request->id,
            'tipo_negocio' => $request->tipo_negocio,
            
            ]);

            $tipo_negocio->save();

            return redirect('/tipo_negocio');
        
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
        $tipo_negocio =  Tipo_negocio::find($id);
        return view('Tipo_negocio.edit')->with('tipo_negocio', $tipo_negocio);
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
        $tipo_negocio = Tipo_negocio::find($id);
        $tipo_negocio->id = $request->get('id');
        $tipo_negocio->tipo_negocio = $request->get('tipo_negocio');
        
        $tipo_negocio->save();
        
        return redirect()->route('tipo_negocio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo_negocio = Tipo_negocio::find($id);
        $tipo_negocio->delete();
      
        return redirect()->route('tipo_negocio.index');
    }
}
