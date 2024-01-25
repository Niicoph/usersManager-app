<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Usuario;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {
        $dni = $request->input('dni');
    
        $usuarios = Usuario::when($dni, fn($query, $dni) => $query->dni($dni))->get();
    
        return view('usuario.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Usuario $usuario) {
        $data = $request->validate([
            'dni' => 'required|integer|min:1000000|max:99999999',
            'nombre' => 'required|string|min:3|max:255',
            'apellido' => 'required|string|min:3|max:255',
            'concurrencia' => 'required|integer|min:1|max:5',
        ] , [
            'dni.required' => 'El DNI es obligatorio',
            'dni.integer' => 'El DNI debe ser un número entre 1.000.000 y 99.999.999',
            'nombre.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'concurrencia.required' => 'La concurrencia es obligatoria',
        ]
    );
    
        $dbUser = $usuario->where('dni', $data['dni'])->first();
    
        if ($dbUser) {
            return redirect()->route('usuario.create')->with('error', 'Ya existe un usuario con este DNI');
        } else {
            $data['created_at'] = now();
            $data['fecha_vencimiento'] = now()->addDays(30);
            $data['dias_disponibles'] = 30;
            $data['estado'] = 'activo';
            $usuario->create($data);
            return view('usuario.sucess');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $usuario = Usuario::find($id);
        return view('usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
      $usuario = Usuario::find($id);
      return view('usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'dni' => 'required|integer|min:1000000|max:99999999',
            'nombre' => 'required|string|min:3|max:255',
            'apellido' => 'required|string|min:3|max:255',
            'concurrencia' => 'required|integer|min:1|max:5',
        ], [
            'dni.required' => 'El DNI es obligatorio',
            'dni.integer' => 'El DNI debe ser un número entre 1.000.000 y 99.999.999',
            'nombre.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'concurrencia.required' => 'La concurrencia es obligatoria',
        ]);
    
        $usuario = Usuario::find($id);
    
        if (!$usuario) {
            return redirect()->route('usuario.edit', $id)->with('error', 'Usuario no encontrado');
        }
    
        $usuario->update($data);
    
        return view('usuario.update');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $usuario = Usuario::find($id);

        if ($usuario) {
            $usuario->delete();
            return view('usuario.destroy');
        } else {
            return redirect()->route('error');
        }
    }
}
