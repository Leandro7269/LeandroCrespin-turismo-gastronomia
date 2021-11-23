<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Tipo_comida extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasRoles;
    protected $table = 'tipo_comidas';
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
    ];
}
