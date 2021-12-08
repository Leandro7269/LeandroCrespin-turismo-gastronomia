<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
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
        $users =  User::all();
        return view('user.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->id = $request->id;
        $user->apellido = $request->apellido;
        $user->telefono = $request->telefono;
        $user->direccion = $request->direccion;
        $user->local_id = $request->local_id;
        $user->nombre = $request->nombre;;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        //Asigno un rol por defecto
        
        $user->assignRole('Creador');
        
        return redirect('/user');
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
        $users =  User::find($id);
        return view('user.edit')->with('user', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //dd($id);
        $users = User::find($id);
        $users->id = $request->get('id');
        $users->nombre = $request->get('nombre');
        $users->apellido = $request->get('apellido');
        $users->telefono = $request->get('telefono');
        $users->email = $request->get('email');
        $users->password = $request->get('password');
        $users->direccion = $request->get('direccion');
        $users->local_id = $request->get('local_id');

        $users->save();
        
        return redirect()->route('user.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
      
        return redirect()->route('user.index');
    }
}

