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

Route::get('inserir', function () {
    $cadastros = App\Cadastro::all();
    return view('formulario', compact('cadastros'));
})->name('inserir');


Route::get('mostrar/{id}/destroy', ['as' => 'mostrar.destroy', 'uses' => 'Cadastro_Controller@destroy'],function(){
    $cadastros = App\Cadastro::all();
    return view('mostrar', compact('cadastros'));
});
Route::get('mostrar', function(){
    $cadastros = App\Cadastro::all();
    return view('mostrar',compact('cadastros'));
})->name('mostrar');
Route::get('index', function(){
        $cadastros = App\Cadastro::all();
        return view('index',compact('cadastros'));
    })->name('index');
Route::get('index/{id}/edit/', [ 'as' => 'index.edit', 'uses' => 'Cadastro_Controller@edit'],function(){
    $cadastros = App\Cadastro::all();
    return view('index/{id}/edit/',compact('cadastros'));});
 
Route::resource('Cadastro', 'Cadastro_Controller');
Route::resource('atualiza', 'update');



