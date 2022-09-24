<?php

use App\Http\Controllers\JogosController;
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

////////////////////////////////////////...A AULA COMEÇOU AQUI PARA BAIXO...////////////////////////////////////////

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::view('/jogos','jogos');

// Route::get('/jogos', function(){
//     return "Curso de laravel";
// });

//route::view('/jogos', 'jogos',['name'=>'GTA']);


//Para receber só textos
// Route::get('/jogos/{name?}', function($name = null){
//     return view('jogos',['nomeJogo'=>$name]);
// })->where('name','[A-Za-z]+');


//Para receber só numeros
// Route::get('/jogos/{id?}', function($id = null){
//     return view('jogos',['idJogo'=>$id]);
// })->where('id','[0-9]+');

//Para receber numeros e textos
// Route::get('/jogos/{id?}/{name?}', function($id = null, $name = null){
//     return view('jogos',['idJogo'=>$id, 'nomeJogo'=>$name]);
// })->where(['id','[0-9]+', 'name','[A-Za-z]+']);

//criando botao de redirecionamento
Route::get('/jogos', [JogosController::class, 'index']);

Route::get('/casa', function(){
    return view('welcome');
})->name('home-index');

Route::fallback(function(){
    return "Erro ao localizar rota!";
});
