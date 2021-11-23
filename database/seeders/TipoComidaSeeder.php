<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipo_comida;
class TipoComidaSeeder extends Seeder {
    public function run(){
        Tipo_comida::firstOrCreate(['nombre' => 'comida arabe', 'descripcion' => 'descripcion comida arabe']);
        Tipo_comida::firstOrCreate(['nombre' => 'comida armenia', 'descripcion' => 'descripcion comida armenia']);
        Tipo_comida::firstOrCreate(['nombre' => 'comida asiatica', 'descripcion' => 'descripcion comida asiatica']);
        Tipo_comida::firstOrCreate(['nombre' => 'comida china', 'descripcion' => 'descripcion comida china']);
        Tipo_comida::firstOrCreate(['nombre' => 'comida italiana', 'descripcion' => 'descripcion comida italiana']);
        Tipo_comida::firstOrCreate(['nombre' => 'comida francesa', 'descripcion' => 'descripcion comida francesa']);
        Tipo_comida::firstOrCreate(['nombre' => 'comida mexicana', 'descripcion' => 'descripcion comida mexicana']);
        Tipo_comida::firstOrCreate(['nombre' => 'comida peruana', 'descripcion' => 'descripcion comida peruana']);
        Tipo_comida::firstOrCreate(['nombre' => 'comida vegana', 'descripcion' => 'descripcion comida arabe']);
        Tipo_comida::firstOrCreate(['nombre' => 'comida vegetariana', 'descripcion' => 'descripcion comida vegetariana']);
        Tipo_comida::firstOrCreate(['nombre' => 'comida paraguaya', 'descripcion' => 'descripcion comida paraguaya']);

    }
}