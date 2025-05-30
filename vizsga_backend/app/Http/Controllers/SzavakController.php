<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use Illuminate\Http\Request;

class SzavakController extends Controller
{
    //
    public function getSzavak(){
        return Szavak::all();
    }

    public function postSzavak(Request $request){
        $request->validate([
            'angol'=>'required|string|max:255',
            'magyar'=>'required|string|max:255',
            'temaId'=>'required|exists:tema.id'
        ]);

        $szavak = Szavak::create([
            'angol'=>$request->angol,
            'magyar'=>$request->magyar,
            'temaId'=>$request->temaId,
        ]);
        return response()->json($szavak,201);
    }

    public function byTema(){
        return Szavak::where('temaId')->get();
    }
}
