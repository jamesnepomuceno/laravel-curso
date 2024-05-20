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

Route::get('/', 'PrincipalController@principal')->name('site.index');


// Se fosse a versão 8 do Laravel, seria assim
// =============
// Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

// Route::get('/sobre-nos', function () {
//     return "Sobre nós";
// });

Route::get('/sobre-nos', 'SobreNosController@sobre')->name('site.sobrenos');

// Route::get('/contato', function () {
//     return "Contato";
// });
Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function () {
    return 'Login';
})->name('site.login'); 

/* Verbo http
GET - Recuperar informações
POST - Enviar informações
PUT - Atualizar informações
DELETE - Deletar informações
*/

//Usando parâmetros
Route::get('/contato/{nome}/{categoria}/{assunto}', function ($nome, $categoria, $assunto) {
    echo 'Estamos aqui: ' . $nome . ' ' . $categoria . ' ' . $assunto;
});

//Usando parâmetros opcionais
//Tem que ter um valor padrão
Route::get('/contato/{nome}/{categoria}/{assunto?}', 
    function ($nome, $categoria, $assunto = 'informação não fornecida') {
        echo 'Estamos aqui: ' . $nome . ' ' . $categoria . ' ' . $assunto;
    }
);

//Agrupando rotas
Route::prefix('/app')->group(function () {    
    Route::get('/clientes', function () {
        return 'clientes';
    })->name('app.clientes'); 
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores'); 
    Route::get('/produtos', function () {
        return 'produtos';
    })->name('app.produtos'); 
});

//Rotas para testes de direcionamento
Route::get('/rota1', function () {
    echo 'Rota 1';
})->name('site.rota1');

Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');

// ou poderia ser dessa forma diretamente
Route::redirect('/rota3', '/rota1');

//Rota de fallback
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">Clique aqui</a> para voltar a página inicial.';
});

//Passando parâmetros
//php artisan make:controller TesteController
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');



//Usando expressões regulares
// apenas para teste
Route::get('/contato2/{nome}/{categoria_id}', 
    function (
        String $nome, 
        int $categoria_id = 1) 
    {
        echo 'Estamos aqui: ' . $nome . ' - ' . $categoria_id;
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');