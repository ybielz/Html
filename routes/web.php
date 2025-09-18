<?php

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