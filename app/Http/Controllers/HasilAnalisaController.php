<?php

namespace App\Http\HasilAnalisaController;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\DataPasien;

class HasilAnalisaController extends Controller
{

    public function index()
    {
        $hasilanalisas = Hasilanalisa::findOrFail();
        $datapasiens = Datapasien::findOrFail();
        $gejala = Gejala::all();
        $penyakit = Penyakit::findOrFail();
        return view('diagnosa_penyakit.hasil_anaisa', compact('hasilanalisas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diagnosa_penyakit.hasil_analisa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required|bigint',
            'nama' => 'required|varchar|max:20',
            'kelamin' => 'required|varchar|max:20',
            'alamat' => 'required|text',
            'pemilik' => 'required|varchar|max:20',
            'id_gejala' => 'required|varchar|max:20',
            'nm_gejala' => 'required|varchar|max:20',
            'definisi' => 'required|text',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hasilanalisas = HasilAnalisa::findOrFail($id);
        return view('diagnosa_penyakit.hasil_analisa', compact('hasilanalisas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hasilanalisas = Hasilanaliisa::findOrFail($id);
        return view('diagnosa_penyakit.hasil_analisa', compact('hasilanalisas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_pasien' => 'required|bigint',
            'nama' => 'required|varchar|max:20',
            'kelamin' => 'required|varchar|max:20',
            'alamat' => 'required|text',
            'pemilik' => 'required|varchar|max:20',
            'id_gejala' => 'required|varchar|max:20',
            'nm_gejala' => 'required|varchar|max:20',
            'definisi' => 'required|text',
        ]);

        $hasilanalisas = Hasilanalisa::findOrFail($id);
        $hasilanalisas->update($request->all());
        return redirect()->route('diagnosa_penyakit.hasil_analisa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hasilanalisas = Hasilanalisa::findOrFail($id);
        $hasilanalisas->delete();
        return redirect()->route('diagnosa_penyakit.hasil_analisa');
    }
}
