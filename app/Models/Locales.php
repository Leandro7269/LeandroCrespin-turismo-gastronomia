<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Locales extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasRoles;
    protected $table = 'locales';
    protected $fillable = [
        'id',
        'nombre_local',
        'telefono',
        'email',
        'tipo_negocio_id'
    ];
}
