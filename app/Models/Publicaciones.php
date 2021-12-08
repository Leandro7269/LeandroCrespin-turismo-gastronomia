<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publicaciones extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'publicaciones';
    protected $fillable = [
        'id',
        'imagen',
        'descripcion',
    ];
}
