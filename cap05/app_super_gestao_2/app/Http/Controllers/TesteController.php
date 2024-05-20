<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        echo 'Teste Controller - ' . $p1 . ' - ' . $p2;
        
        // return view('site.teste', ['p1' => $p1, 'p2' => $p2]); // arrray associativo
        //return view('site.teste', compact('p1', 'p2'));           // compact
        
        //return view('site.teste')->with('p1', $p1), 'p2', $p2);           // With
        
        // return view('site.teste')->with('p1', $p1)->with('p2',$p2);   //outra forma de passar parametros
        return view('site.teste')->with(['p1' => $p1, 'p2' => $p2]);
    }
}
