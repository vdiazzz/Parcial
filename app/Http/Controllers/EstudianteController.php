<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
        ]);
        $estudiante = new Estudiante([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
        ]);
        $estudiante->save();
        return redirect()->route('estudiante.index');
    }
    
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('index', compact('estudiantes'));
    }
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('edit', compact('estudiante'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
    ]);
    
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->nombre = $request->input('nombre');
        $estudiante->apellido = $request->input('apellido');
        $estudiante->save();
    
        return redirect()->route('estudiante.index');
    }
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();
        return redirect()->route('estudiante.index');
    }


}




