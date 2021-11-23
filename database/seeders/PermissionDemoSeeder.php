<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;

class PermissionDemoSeeder extends Seeder {
    public function run(){
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        //createPermissions

        //permisos para user
        Permission::firstOrCreate(['name' => 'user lista']);
        Permission::firstOrCreate(['name' => 'user agregar']);
        Permission::firstOrCreate(['name' => 'user editar']);
        Permission::firstOrCreate(['name' => 'user borrar']);
        
        //permisos para tipo_comida
        Permission::firstOrCreate(['name' => 'tipo_comida lista']);
        Permission::firstOrCreate(['name' => 'tipo_comida agregar']);
        Permission::firstOrCreate(['name' => 'tipo_comida editar']);
        Permission::firstOrCreate(['name' => 'tipo_comida borrar']);
        
        //permisos para tipo_negocio
        Permission::firstOrCreate(['name' => 'tipo_negocio lista']);
        Permission::firstOrCreate(['name' => 'tipo_negocio agregar']);
        Permission::firstOrCreate(['name' => 'tipo_negocio editar']);
        Permission::firstOrCreate(['name' => 'tipo_negocio borrar']);
        
        //Permisos para locales
        Permission::firstOrCreate(['name' => 'locales lista']);
        Permission::firstOrCreate(['name' => 'locales agregar']);
        Permission::firstOrCreate(['name' => 'locales editar']);
        Permission::firstOrCreate(['name' => 'locales borrar']);
        
        //Permisos para sucursales
        Permission::firstOrCreate(['name' => 'sucursales lista']);
        Permission::firstOrCreate(['name' => 'sucursales agregar']);
        Permission::firstOrCreate(['name' => 'sucursales editar']);
        Permission::firstOrCreate(['name' => 'sucursales borrar']);

        //Roles 1 y 2
        $role1 = Role::firstOrCreate(['name' => 'Admin']);
        $role2 = Role::firstOrCreate(['name' => 'Creador']);

        //Roles 1 para user
        $role1->givePermissionTo('user lista');
        $role1->givePermissionTo('user agregar');
        $role1->givePermissionTo('user editar');
        $role1->givePermissionTo('user borrar');

        //Roles 1 para tipo_comida
        $role1->givePermissionTo('tipo_comida lista');
        $role1->givePermissionTo('tipo_comida agregar');
        $role1->givePermissionTo('tipo_comida editar');
        $role1->givePermissionTo('tipo_comida borrar');

        //Roles 1 para tipo_negocio
        $role1->givePermissionTo('tipo_negocio lista');
        $role1->givePermissionTo('tipo_negocio agregar');
        $role1->givePermissionTo('tipo_negocio editar');
        $role1->givePermissionTo('tipo_negocio borrar');

        //Roles 1 para sucursales
        $role1->givePermissionTo('sucursales lista');
        $role1->givePermissionTo('sucursales agregar');
        $role1->givePermissionTo('sucursales editar');
        $role1->givePermissionTo('sucursales borrar');

        //Roles 1 para locales
        $role1->givePermissionTo('locales lista');
        $role1->givePermissionTo('locales agregar');
        $role1->givePermissionTo('locales editar');
        $role1->givePermissionTo('locales borrar');

        //Roles 2
        $role2->givePermissionTo('user lista');
        $role2->givePermissionTo('user agregar');

    }
}