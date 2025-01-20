<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MangaController extends Controller
{
    public function genres()
    {

        //CODICE FORNITO DA CHATGPT PER LA GESTIONE DELLA RESPONSE NEL CASO DIA UN ERRORE. 

        //Make the HTTP request and store the response in $response
        $response = Http::get('https://api.jikan.moe/v4/genres/manga');

        // Check if the response is successful
        if ($response->successful()) {
            // Parse the JSON response
            $genres = $response->json()['data']; // This contains the data you need from the API
            //dd($genres); // Dump the response for debugging
            return view('manga.genres', ['genres' => $genres]);
        } else {
            // Handle error cases, such as a bad request or server error
            abort(500, 'Failed to fetch genres from the API. Status: ' . $response->status());
        }


        //Come il codice ma senza gestione della response nel caso di errore
        // $genres = Http::get('https://api.jikan.moe/v4/genres/manga')->json()['data'];
        // return view('manga.genres', ['genres' => $genres]);
    }

    public function index($genre_id, $genre_name = NULL)
    {
        //Verificato che la funzione cattura correttamente i dati
        // dd($genre_id, $genre_name);

        //? QUERY STRING
        //Il carattere '?' separa una parte del percorso URL, con l'inizio della QUERY
        //Questo tipo di codice può essere paragonato banalmente a una rotta parametrica
        //Il carattere punto '.' serve per concatenare la stringa con la variabile $genre_id
        $mangas = Http::get('https://api.jikan.moe/v4/manga?genres=' . $genre_id)->json()['data'];
        return view('manga.index', ['mangas' => $mangas, 'genre_name' => $genre_name]);
    }
}
