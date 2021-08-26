<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificaciones extends Model
{
    use HasFactory;
    protected $table = 'calificaciones';
    protected $fillable = [
        'id',
        'materias',
        'reportes',
        'materias_reprobadas'
    ];

    public $timestamps = false;
}
