<?php

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
    return view('welcome');
});

Route::get('/mobile', 'Site\CursoController@mobile')->name('curso.mobile');
Route::get('/web', 'Site\CursoController@web')->name('curso.web');
Route::get('/design-e-ux', 'Site\CursoController@design')->name('curso.design');
Route::get('/curso/detalhes/{id}', 'Site\CursoController@detalhes')->name('curso.detalhes');

// Login ADM
Route::get('/login', 'Site\LoginController@index')->name('site.login');
Route::get('/login/sair', 'Site\LoginController@sair')->name('site.login.sair');
Route::get('/login/entrar', 'Site\LoginController@entrar')->name('site.login.entrar');

Route::group(['middleware'=>'auth'],function(){

  Route::get('/admin/cursos', 'Admin\CursoController@index')->name('admin.cursos');
  Route::get('/admin/cursos/adicionar', 'Admin\CursoController@adicionar')->name('admin.cursos.adicionar');
  Route::post('/admin/cursos/salvar', 'Admin\CursoController@salvar')->name('admin.cursos.salvar');
  Route::get('/admin/cursos/editar/{id}', 'Admin\CursoController@editar')->name('admin.cursos.editar');
  Route::put('/admin/cursos/atualizar/{id}', 'Admin\CursoController@atualizar')->name('admin.cursos.atualizar');
  Route::get('/admin/cursos/deletar/{id}', 'Admin\CursoController@deletar')->name('admin.cursos.deletar');
  Route::get('/admin/cursos/adicionar-detalhes/{id}', 'Admin\AddDetalhes@adddetalhes')->name('admin.cursos.detalhes');
  Route::post('/admin/cursos/salvar', 'Admin\AddDetalhes@salvar_det')->name('admin.cursos.salvar_det');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/finalizar-compra/{id}','Site\CheckoutController@checkout')->name('checkout');

Route::post('Finalizando-compra/boleto', 'Site\PagseguroController@boleto')->name('boleto_action');

Route::get('/minha-conta', 'Site\LoginController@minha_conta')->name('minha.conta');
Route::get('/meus-cursos', 'Site\CursoController@meus_cursos')->name('meus.cursos');
Route::any('busca','Site\CursoController@busca')->name('busca');