<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobre()
    {
        return view('site.sobre-nos');

        /*
        Lembrando que o Laravel já entende que o arquivo está dentro da pasta 
        resources/views.
        Com isso ele vai na pasta SITE e procura o arquivo SOBRE-NOS.BLADE.PHP
        */
    }
}
