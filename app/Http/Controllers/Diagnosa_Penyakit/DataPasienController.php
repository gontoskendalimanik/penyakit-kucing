<?php
namespace App\Http\Controllers;
namespace App\Http\DataPasienController;
namespace App\Http\GejalaController;
namespace App\Http\HasilAnalisaController;

use Illuminate\Http\Request;
use App\Models\PenyakitController;
use App\Models\Gejala;
use App\Models\Penyakit;

class DataPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datapasiens = DataPasien::all();
        
        return view('diagnosa_penyakit.data_pasien', compact('datapasiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diagnosa_penyakit.data_pasien');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required|biginteger',
            'nama_pasien' => 'required|varchar|max:20',
            'kelamin' => 'required|varchar|max:20',
            'alamat' => 'required|text',
            'pemilik' => 'required|varchar|max:20',
        ]);

        Datapasien::create($request->all());
        return redirect()->route('diagnosa_penyakit.data_pasien')->with('success', 'Data Pasien berhasil ditambahkan!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $datapasiens = Datapasien::findOrFail($id);
        return view('diagnosa_penyakit.data_pasien', compact('datapasiens'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datapasiens = Datapasien::findOrFail($id);
        return view('diagnosa_penyakit.hasil_analisa', compact('datapasiens'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datapasiens = Datapasien::findOrFail($id);
        $datapasiens->delete();
        return redirect()->route('diagnosa_penyakit.data_pasien')->with('success', 'Data Pasien berhasil dihapus!');
    }
}
