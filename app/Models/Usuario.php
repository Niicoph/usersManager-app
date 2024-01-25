<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder;

class Usuario extends Model {
    use HasFactory;

    protected $fillable = ['dni', 'nombre', 'apellido', 'concurrencia', 'created_at', 'fecha_vencimiento', 'dias_disponibles'];

    protected $attributes = [
        'estado' => 'activo',
    ];



    public function scopeDni(Builder $query, int $dni): Builder {
        return $query->where('dni', $dni);
    }





}
