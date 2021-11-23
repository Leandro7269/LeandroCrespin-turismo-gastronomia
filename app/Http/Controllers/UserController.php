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
        $users = User::create(
    ['id' => $request->id,
    'nombre' => $request->nombre,
    'apellido' => $request->apellido,
    'telefono' => $request->telefono,
    'email' => $request->email,
    'password' => $request->password,
    'direccion_local' => $request->direccion_local,
    'local_id' => $request->local_id,
    ]);
        
        $user = new User();
        $user->name = $request->nombre_local;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        //aca habra que asignar el rol por defecto
        // pero vamos a probar si crea y podes iniciar
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
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->nombre = $request->get('nombre');
        $users->apellido = $request->get('apellido');
        $users->telefono = $request->get('telefono');
        $users->email = $request->get('email');
        $users->password = $request->get('password');
        $users->direccion_local = $request->get('direccion_local');
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

