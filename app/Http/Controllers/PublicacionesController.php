<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicaciones;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class PublicacionesController extends Controller
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
        $Publicaciones =  Publicaciones::all();
        return view('Publicaciones.index')->with('Publicaciones',$Publicaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Publicaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    if($request->get('imagen')===null && $request->file('imagen')===null){
        $image = 'default.png';
        $request->request->add(['imagen1'=>$image]);
      }
      elseif (($request->get('imagen')==="default.png")) {
        $request->request->add(['imagen1'=>"default.png"]);
      }
      else {
          $image = $request->file('imagen');
          $imageName = Str::random(20).'.png';
          $imagen = Image::make($image)->encode('png', 75);
          $destinationPath = public_path('img');
          $imagen->resize(530, 470)->save($destinationPath."/".$imageName);
          $request->request->add(['imagen1'=>$imageName]);
      }
      $Publicaciones = Publicaciones::create(
        ['user_id' => Auth::user()->id,
         'descripcion' => $request->descripcion,   
         'imagen' =>$request->imagen1
        ]);
        
        $Publicaciones->save();

        return redirect('/publicaciones');
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
        $Publicaciones =  Publicaciones::find($id);
        return view('Publicaciones.edit')->with('Publicaciones', $Publicaciones);
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
        //dd($request);
        $Publicaciones = Publicaciones::find($id);
        $Publicaciones->id = $request->get('id');
        $Publicaciones->descripcion = $request->get('descripcion');
        if(!($request->get('imagen')===$unit->imagen)){
            if($request->get('imagen')===null && $request->file('imagen')===null){
              $image = 'default.png';
              $request->request->add(['imagen'=>$image]);
            }
            elseif (($request->get('imagen')==="default.png")) {
              $request->request->add(['imagen'=>"default.png"]);
            }
            else {
                $image = $request->get('imagen');
                $imageName = Str::random(20).'.png';
                $imagen = Image::make($image)->encode('png', 75);
                $destinationPath = public_path('img');
                $imagen->resize(530, 470)->save($destinationPath."/".$imageName);
                $request->request->add(['imagen'=>$imageName]);
            }
          }
        //aca falta agregar condiciones
        //$Publicaciones->imagen = $request->get('imagen');

        $Publicaciones->save();

        return redirect()->route('Publicaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Publicaciones = Publicaciones::find($id);
        $Publicaciones->delete();
      
        return redirect()->route('Publicaciones.index');
    }
}
