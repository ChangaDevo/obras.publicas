<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Imports\ProveedoresImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    public function import(Request $request)
    {
        $request->validate(['archivo_excel' => 'required|mimes:xlsx,xls,csv']);
        Excel::import(new ProveedoresImport, $request->file('archivo_excel'));
        return back()->with('success', 'Proveedores importados correctamente.');
    }
}