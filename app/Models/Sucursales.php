<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Sucursales extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasRoles;
    protected $table = 'sucursales';
    protected $fillable = [
        'id',
        'descripcion',
        'local_id',
        'ref',
        'direccion',
    ];
}
