<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Comida_locales extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasRoles;
    protected $table = 'comidas_locales';
    protected $fillable = [
        'id',
        'local_id',
        'comida_id',
        'precio',
    ];
}
