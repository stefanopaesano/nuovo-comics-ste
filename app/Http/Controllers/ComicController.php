<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        // Carica i dati dal file di configurazione
        $comics = config('comics');

        return view('comics.index', compact('comics'));
    }
}
