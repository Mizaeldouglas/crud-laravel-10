<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
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
    Route::get('/produtos/{id}', [ProdutosController::class,'show'])->name('produtos.show');
    Route::post('/produtos', [ProdutosController::class,'store'])->name('produtos.store');
    Route::put('/produtos/{id}', [ProdutosController::class,'update'])->name('produtos.update');
    Route::delete('/produtos/{id}', [ProdutosController::class,'destroy'])->name('produtos.destroy');
});
