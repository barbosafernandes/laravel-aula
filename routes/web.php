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

Route::get('produtos/criar', function () {
	echo "Tela para criar um produto";
	echo "<a href='/produtos'>Voltar para a tela inicial</a>";
});

Route::get('produtos', function (){
	$produtos = [ 
		['1', 'Arroz', 'tio jõao', 'R$ 8,50'],
		['2', 'Feijão', 'tio jõao', 'R$ 5,75'],
		['3', 'Farinha', 'Farinha Timbiras', 'R$ 3,50'] 
				];
	return view ('lista-produtos', ['produtos'=> $produtos]);
});

Route::get('/alunos/{nome}/{sobrenome}/sistemas', function ($nome,$sobrenome) {
    echo "$nome $sobrenome";
});