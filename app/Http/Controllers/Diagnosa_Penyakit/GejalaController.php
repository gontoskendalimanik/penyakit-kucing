<?php

namespace App\Http\Controllers;
namespace App\Http\DataPasienController;
namespace App\Http\GejalaController;
namespace App\Http\HasilAnalisaController;

use Illuminate\Http\Request;
use App\Models\PenyakitController;
use App\Models\Gejala;
use App\Models\Penyakit;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

}
