<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Director;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Star;
use App\Models\Language;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movie/movies_list', [
            'movies' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movie/movie_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->storyline = $request->storyline;
        $movie->save();

        return redirect()->route('movie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movie/movie_read', [
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $stars = Star::all();
        $directors = Director::all();
        $countries = Country::all();
        $languages = Language::all();
        $genres = Genre::all();
        return view('movie/movie_update', [
            'movie' => $movie,
            'stars' => $stars,
            'directors' => $directors,
            'countries' => $countries,
            'languages' => $languages,
            'genres' => $genres,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        // dd($request->all());
        $star = Star::where('name', "=", $request->star)->first();
        if ($request->star != '') {
            $star->movies()->attach($movie);
        }
        $movie->title = $request->title;
        $movie->storyline = $request->storyline;
        $country = Country::where('country', $request->country)->first();
        if ($request->country != "Não cadastrado") {
            $movie->country_id = $country->id;
        }
        $movie->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movie.index');
    }
}
