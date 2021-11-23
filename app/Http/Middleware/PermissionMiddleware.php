<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;


class PermissionMiddleware{

    public function handle($request, Closure $next, $permission){
        if(Auth::guest()){
            return redirect('login');
        }

        $role = Role::join('model_has_roles', 'model_has_roles.role_id', '=', 'roles_id')
                    ->where('model_has_roles.model_id', '=', Auth::user()->id)
                    ->first();
        dd($role);            
        if($role !== null){
            if(! $role->hasPermissionTo($permission)){
                abort(404);
            }
        }else{
            abort(403);
        }
        return $next($request);
    }
}