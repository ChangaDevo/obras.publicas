<?php
namespace App\Http\Controllers;

use App\Models\Obra;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ObrasImport;
class ObraController extends Controller
{
    // Muestra la tabla con todas las obras (El visualizador interno)
    public function index()
    {
        $obras = Obra::orderBy('created_at', 'desc')->get();
        return view('obras.index', compact('obras'));
    }
    public function import(\Illuminate\Http\Request $request)
    {
        $request->validate(['archivo_excel' => 'required|mimes:xlsx,csv,xls|max:5120']);
        Excel::import(new ObrasImport, $request->file('archivo_excel'));
        return back()->with('success', '¡Las obras del Excel se importaron correctamente!');
    }
    // Muestra el formulario para crear una nueva obra
    public function create()
    {
        return view('obras.create');
    } // Muestra el expediente completo de una obra específica
    public function show(Obra $obra)
    {
        // Carga la obra junto con sus propuestas para no hacer consultas de más a la BD
        $obra->load('propuestas');

        return view('obras.show', compact('obra'));
    }
    // Recibe los datos del formulario y los guarda en la base de datos
    public function store(Request $request)
    {
        // 1. Validamos que los datos obligatorios vengan en el formulario
        $request->validate([
            'entidad' => 'required|in:Municipal,Estatal,JMAS',
            'periodo_ejercicio' => 'required|digits:4',
            'numero_contrato' => 'required|unique:obras,numero_contrato',
            'objeto_descripcion' => 'required',
        ]);

        // 2. Guardamos la obra
        Obra::create($request->all());

        // 3. Redirigimos de vuelta con un mensaje de éxito
        return redirect()->route('obras.index')->with('success', '¡Obra registrada correctamente! Ahora puedes agregarle las propuestas y el análisis de riesgo.');
    }

// Aquí irán después las funciones show(), edit(), update() y destroy()
}