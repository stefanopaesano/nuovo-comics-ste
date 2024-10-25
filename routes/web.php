<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\ExitController;
use App\Http\Controllers\ComicController;

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

// Route::METODO(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)

Route::get('/exit', [ExitController::class, 'showComics'])->name('exit');






Route::get('/', function(){
    $comics = config('comics');

    return view ('welcome',[
        'comics' => $comics,
    ]);
   
})->name('home');



Route::get('/chi-siamo', [MainController::class, 'about'])->name('chi-siamo');

/*
    Questa istruzione definisce 7 rotte (in quest'ordine - perché è importante l'ordine delle rotte?):
    - GET       /books                  -> books.index
    - POST      /books                  -> books.store
    - GET       /books/create           -> books.create
    - GET       /books/{book}           -> books.show
    - PUT       /books/{book}           -> books.update
    - DELETE    /books/{book}           -> books.destroy
    - GET       /books/{book}/edit      -> books.edit
*/
Route::resource('books', BookController::class);
