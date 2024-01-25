<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Usuario;

class ActualizarDiasDisponibles extends Command
{
    protected $signature = 'actualizar:dias_disponibles';
    protected $description = 'Actualiza los días disponibles para los usuarios registrados.';

    public function handle()
    {
        $usuarios = Usuario::all();

        foreach ($usuarios as $usuario) {
            if ($usuario->dias_disponibles >= 0) {
                $usuario->decrement('dias_disponibles');
            } else {
                // Si los días disponibles son 0, cambiar el estado a 'inactivo'
                $usuario->estado = 'inactivo';
                $usuario->save();
            }
        }

        $this->info('Días disponibles actualizados correctamente.');
    }
}
