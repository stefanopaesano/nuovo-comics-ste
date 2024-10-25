<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExitController extends Controller
{
    public function index()
    {
        return view('exit');
    }

    public function showComics()
    {
        // Carica i dati dal file di configurazione
        $overcomics = config('overcomics');

        // dd($overcomics);

        

        // Restituisce la vista con i dati dei fumetti
        return view('exit', compact('overcomics'));
    }
}
