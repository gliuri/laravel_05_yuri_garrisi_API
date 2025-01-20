<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MangaController extends Controller
{
    public function genres()
    {
        // Make the HTTP request and store the response in $response
        $response = Http::get('https://api.jikan.moe/v4/genres/manga');

        // Check if the response is successful
        if ($response->successful()) {
            // Parse the JSON response
            $genres = $response->json(); // This contains the data you need from the API
            dd($genres); // Dump the response for debugging
        } else {
            // Handle error cases, such as a bad request or server error
            abort(500, 'Failed to fetch genres from the API. Status: ' . $response->status());
        }
    }
}
