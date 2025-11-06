<?php

use App\Models\Ator;
use App\Models\Genero;
use App\Models\Nacionalidade;
use App\Models\Diretor;
use App\Models\Filme;
use App\Models\Produtora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//return view('welcome');
//});

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

Route::get('/', function() {
    $filmes = Filme::all();
    return view('lista-filmes',compact('filmes'));
});

Route::get('/detalhes-filme/{filme}', function(Filme $filme){
 return view('detalhes-filme', compact('filme'));
})->name('detalhes-filme');

Route::get('/', function() {
    $produtora = Produtora::all();
    return view('lista-produtoras',compact('produtoras'));
});

Route::get('/detalhes-produtora/{produtora}', function(Produtora $produtora){
 return view('detalhes-produtora', compact('produtora'));
})->name('detalhes-produtora');

Route::get('/', function() {
    $diretores = Diretor::all();
    return view('lista-diretores',compact('diretores'));
});

Route::get('/detalhes-diretores/{diretores}', function(Diretor $diretor){
 return view('detalhes-diretor', compact('diretor'));
})->name('detalhes-diretor');

Route::get('/', function() {
    $atores = Ator::all();
    return view('lista-atores',compact('atores'));
});

Route::get('/detalhes-ator/{ator}', function(Ator $ator){
 return view('detalhes-ator', compact('ator'));
})->name('detalhes-ator');

Route::view('/login','login')->name('login');

Route::post('/logar', function (Request $request){
   dd($request);
})->name('logar');
