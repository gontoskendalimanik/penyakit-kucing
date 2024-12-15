<?php


namespace App\Http\PenyakitController;

use Illuminate\Http\Request;

use App\Models\Penyakit;


class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penyakits = Penyakit::all();
        return view('diagnosa_penyakit.hasil_analisa', compact('penyakits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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

        Penyakit::create($request->all());
        return redirect()->route('diagnosa_penyakit.hasil_analisa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penyakits = Penyakit::finOrFail();
        return view('diagnosa_penyakit.hasil_analisa', compact('penyakits'));
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
    }

}
