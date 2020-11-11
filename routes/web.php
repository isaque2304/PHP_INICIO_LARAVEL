<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

//Rota Para exebir os produtos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

//Rota para exibir o formulário de cadastro dos produtos
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

//Rota para cadastrar o produto
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

//Rota para deletar um produto
Route::get('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');

//Rota para editar um produto
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');

//Rota para visualizar o produto
Route::get('/products/view/{id}', [ProductController::class, 'show'])->name('products.view');

//Rota para salvar a edição dos produtos
Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');




//--Rotas de Clientes--------------------------------------------------------------------------------//

//Rota para ver os clientes cadastrados (exibe view dos clientes)
Route::get('/client', [ClientController::class, 'index'])->name('clients.index');