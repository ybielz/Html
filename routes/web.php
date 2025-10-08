<?php

use App\Models\Ator;
use App\Models\Genero;
use App\Models\Nacionalidade;
use App\Models\Diretor;
use App\Models\Filme;
use App\Models\Produtora;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chavinho', function(){
    echo 'bibibibibi conta tuda pra sua mae quico';
});

Route::get('/chavao/{serie}', function($serie){
    echo 'Acessando dados da serie: '. $serie;
});

Route::view('/quico', 'sobre');

Route::get('/generos', function() {
    $generos = Genero::all();
    dd($generos);
});

Route::get('/atores', function() {
    $atores = Ator::all();
    dd($atores);
});

Route::get('/nacionalidades', function() {
    $nacionalidades = Nacionalidade::all();
    dd($nacionalidades);
});

Route::get('/diretores', function() {
    $diretores = Diretor::all();
    dd($diretores);
});

Route::get('/produtoras', function() {
    $produtoras = Produtora::all();
    dd($produtoras);
});

Route::get('/filmes', function() {
    $filmes = Filme::all();
    dd($filmes);
});