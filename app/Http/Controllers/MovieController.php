<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;

class MovieController extends Controller
{
    public function getMovie(Request $request)
    {

        $client = new GuzzleHttpClient();

        $apiRequest = $client->request('GET', 'https://api.themoviedb.org/3/discover/movie?api_key=5ce0297bce5c18388640d3bad0f32ec0&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false');

        $response = json_decode($apiRequest->getBody());
        // dd($response->results);

        return response()->json([
            'draw'=>$request->draw,
			'recordsTotal'=>$response->total_pages,
			'data'=>$response->results
        ], 200);
    }

    public function getMovieDetail(Request $request,$id)
    {
        $client = new GuzzleHttpClient();

        $apiRequest = $client->request('GET', 'https://api.themoviedb.org/3/movie/'.$request->id.'?api_key=5ce0297bce5c18388640d3bad0f32ec0&language=en-US');

        $response = json_decode($apiRequest->getBody());

        return response()->json([
			'data'=>$response
        ], 200);
    }
}
