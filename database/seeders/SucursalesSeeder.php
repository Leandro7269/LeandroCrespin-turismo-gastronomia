<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sucursales;
class SucursalesSeeder extends Seeder {
    public function run(){
        Sucursales::firstOrCreate(['nombre' => '1', 'descripcion' => 'descripcion 1']);
        



}
}