<?php



use App\Models\Ator;
use App\Models\Genero;
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

Route::get('/generos', function(){
        $minhaVariavel = Genero::all();
        dd($minhaVariavel);
});

Route::get('/atores', function(){
    $minhaNovaVariavel = Ator::all();
    dd($minhaNovaVariavel);
});

Route::get('/nacionalidades', function(){
    $minhaNovaSegundaVariavel = Nacionalidade::all();
    dd($minhaNovaSegundaVariavel);
});
