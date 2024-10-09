<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     // return view('welcome');
//     return "Seja bem-vindo ao curso de Laravel!";
// });

// Route::get('/', 'PrincipalController@principal');
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre-nos', function () {
    return "Sobre nós";
});

Route::get('/contato', function () {
    return "Contato";
});


/* Verbo http
GET - Recuperar informações
POST - Enviar informações
PUT - Atualizar informações
DELETE - Deletar informações
*/

