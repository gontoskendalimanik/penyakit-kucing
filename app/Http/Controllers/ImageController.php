<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function show()
    {
        $images = [
            'images/ankilostomiosis.png',
            'images/babesiosis.png',
            'images/diagnosis.png',
            'images/distemper.png',
            'images/hepatozoonosis.png',
            'images/koksidiosis.png',
            'images/pedikulosis.png',
            'images/phtiriasis.png',
            'images/tripanosomiasis.png',
            'images/tungau_kuping.png',
            'images/tungau.png',
        ];
        return view('images', compact('images'));
    }
}
