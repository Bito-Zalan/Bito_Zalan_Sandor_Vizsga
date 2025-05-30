<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    //
    public function getTemak(){
        return Tema::all();
    }
}
