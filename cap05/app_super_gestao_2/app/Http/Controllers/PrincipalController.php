<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal() {
        return view('site.principal');

        /*
        Lembrando que o Laravel já entende que o arquivo está dentro da pasta 
        resources/views.
        Com isso ele vai na pasta SITE e procura o arquivo PRINCIPAL.BLADE.PHP
        */
    }
}
