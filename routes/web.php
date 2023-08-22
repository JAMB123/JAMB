<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('sistema.index');
});

Route::get('/favoritos', function () {
    return view('sistema.favoritos');
});

Route::get('/formulário', function () {
    return view('sistema.formulário');
});

Auth::routes();

Route::get('/sobre', function () {
    return view('sistema.sobre');
});

/*Route::get('/cadastro', function () {
    return view('sistema.cadastro');
});
*/

//Rotas Cadastro de Animal
Route::get('/cadastros/lista', [App\Http\Controllers\ControladorAnimal::class, 'index'])->name('listaCadastro');
Route::get('/cadastros/editar/{id}', [App\Http\Controllers\ControladorAnimal::class, 'edit'])->name('editaCadastro');
Route::get('/cadastros/deletar/{id}', [App\Http\Controllers\ControladorAnimal::class, 'destroy'])->name('deletaCadastro');
Route::post('/cadastros/{id}', [App\Http\Controllers\ControladorAnimal::class, 'update'])->name('gravaEditaCadastro');
Route::get('/cadastros/cadastrar', [App\Http\Controllers\ControladorAnimal::class, 'create'])->name('novoCadastro');
Route::post('/cadastros', [App\Http\Controllers\ControladorAnimal::class, 'store'])->name('gravaNovoCadastro');



