<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;



/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/** PRODUTOS */
Route::match(['get', 'post'], '/acessorios/{filtro?}', [ProdutoController::class ,'index'])->name('produtos');
Route::match(['get', 'post'], '/categoria', [ProdutoController::class ,'categoria'])->name('categoria');
Route::match(['get', 'post'], '/produto/{filtro}', [ProdutoController::class ,'verProduto'])->name('ver_Produto');

/** CLIENTE */
Route::get('/cadastrar', [ClienteController::class ,'cadastrar'])->name('cadastrar');
Route::post('/cliente/cadastrar', [ClienteController::class ,'cliente_cadastrar'])->name('cliente_cadastrar');
Route::match(['get', 'post'], '/cliente/logar', [UsuarioController::class ,'cliente_logar'])->name('cliente_logar');
Route::match(['get', 'post'], '/logout', [UsuarioController::class ,'logout'])->name('logout');
Route::post('/cliente/alterar_endereco', [UsuarioController::class ,'alterarEndereco'])->name('alterar_Endereco');


/** CARRINHO */
Route::match(['get', 'post'], '/carrinho', [ProdutoController::class ,'verCarrinho'])->name('ver_Carrinho')->middleware('auth');
Route::match(['get', 'post'], '/{idproduto}/carrinho/adicionar', [ProdutoController::class ,'adicionarCarrinho'])->name('adicionar_Carrinho')->middleware('auth');
Route::match(['get', 'post'], '/{indice}/carrinho/excluir', [ProdutoController::class ,'excluirCarrinho'])->name('excluir_Carrinho')->middleware('auth');

/** PAGAMENTO */
Route::match(['get', 'post'], '/compras/pagar', [ProdutoController::class ,'pagar'])->name('pagar')->middleware('auth');
Route::match(['get', 'post'], '/compras/pagar/credito', [ProdutoController::class ,'pagarCredito'])->name('pagar_Credito')->middleware('auth'); //CREDITO
Route::match(['get', 'post'], '/compras/historico', [ProdutoController::class ,'historico'])->name('compraHistorico')->middleware('auth');
Route::post('/compras/detalhes', [ProdutoController::class,'detalhes'])->name('compraDetalhes')->middleware('auth');
Route::post('/carrinho/finalizar', [ProdutoController::class ,'finalizarCarrinho'])->name('finalizar_Carrinho')->middleware('auth');

/** VIEWS */
Route::view('/','paginas.home')->name('home');
Route::view('/portifolio','paginas.sobre');
Route::view('/contato','paginas.contato')->name('paginas.contato');
Route::view('/artes', 'paginas.sobre');
Route::view('/producao','paginas.producao');

/** CONTATO */
Route::post('/form', [FormController::class,'store'])->name('form.store');
