<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrianguloController extends Controller
{

    public function triangulo() {
        return view('triangulo');
    }


    public function solucion(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');
       
        $discriminante = $b * $b + $a * $a;
        $h1 = sqrt($discriminante);
        
        return view('solucion', [
            'a' => $a,
            'b' => $b,
            'h1' => $h1,
            
            
        ]);
    }

}
