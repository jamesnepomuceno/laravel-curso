<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        return view('site.contato');

        /*
        Lembrando que o Laravel já entende que o arquivo está dentro da pasta 
        resources/views.
        Com isso ele vai na pasta SITE e procura o arquivo CONTATO.BLADE.PHP
        */
    }
}
