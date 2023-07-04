<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ClientesController;
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
    return view('index');
});

Route::prefix("/produtos")->group(function () {

    Route::get('/', [ProdutosController::class,'index'])->name('produtos.index');
    Route::delete('/delete', [ProdutosController::class,'delete'])->name('produtos.delete');

    Route::get('/cadastrar-produtos', [ProdutosController::class,'cadastrarProdutos'])->name('cadastrar.produtos');
    Route::post('/cadastrar-produtos', [ProdutosController::class,'cadastrarProdutos'])->name('cadastrar.produtos');

    Route::get('/atualizar-produtos/{id}', [ProdutosController::class,'atualizarProdutos'])->name('atualizar.produtos');
    Route::put('/atualizar-produtos/{id}', [ProdutosController::class,'atualizarProdutos'])->name('atualizar.produtos');

});

Route::prefix("/clientes")->group(function () {
    Route::get('/', [ClientesController::class,'index'])->name('clientes.index');
    Route::delete('/delete', [ClientesController::class,'delete'])->name('clientes.delete');

    Route::get('/cadastrar-clientes', [ClientesController::class,'cadastrarClientes'])->name('cadastrar.clientes');
    Route::post('/cadastrar-clientes', [ClientesController::class,'cadastrarClientes'])->name('cadastrar.clientes');

    Route::get('/atualizar-clientes/{id}', [ClientesController::class,'atualizarClientes'])->name('atualizar.clientes');
    Route::put('/atualizar-clientes/{id}', [ClientesController::class,'atualizarclientes'])->name('atualizar.clientes');

});
