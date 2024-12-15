<?php

namespace App\Http\Controllers;
namespace App\Http\DataPasienController;
namespace App\Http\GejalaController;
namespace App\Http\HasilAnalisaController;

use Illuminate\Http\Request;
use App\Models\PenyakitController;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\HasilAnalisa;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gejalas = Gejala::all();
        return view('gejala.index', compact('gejalas'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_gejala' => 'required|varchar|max:20',
            'nm_gejala' => 'required|text',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gejalas = Gejala::findOrFail($id);
        return view('diagnosa_penyakit.', compact('gejalas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_gejala' => 'required|varchar|max:20',
            'nm_gejala' => 'required|text',
        ]);

        $gejalas = Gejala::findOrFail($id);
        $gejalas->update($request->all());
        return redirect()->route('diagnosa_penyakit.gejala');
    }

}
