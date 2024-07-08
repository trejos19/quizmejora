<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller {
    
    public function index() {
        $aulas = Aula::all();
        return view('aulas.index', compact('aulas'));
    }

}