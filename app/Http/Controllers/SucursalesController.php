<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursales;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SucursalesController extends Controller
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
        $sucursales =  Sucursales::whereNull ('deleted_at')->get ();
        return view('Sucursales.index')->with('sucursales',$sucursales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursales.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursales = Sucursales::create(
    ['id' => $request->id,
    'descripcion' => $request->descripcion,
    'local_id' => $request->local_id,
    'referencia' => $request->referencia,
    'direccion' => $request->direccion,
        
    ]);
            $sucursales->save();

            return redirect('/sucursales');
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
        $sucursales =  Sucursales::find($id);
        return view('Sucursales.edit')->with('sucursales', $sucursales);
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
        $sucursales = Sucursales::find($id);
        $sucursales->descripcion = $request->get('descripcion');
        $sucursales->local_id = $request->get('local_id');
        $sucursales->direccion = $request->get('direccion');
        $sucursales->referencia = $request->get('referencia');

        $sucursales->save();

        return redirect()->route('sucursales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursales = Sucursales::find($id);
        $sucursales->delete();
      
        return redirect()->route('sucursales.index');
    }
}
