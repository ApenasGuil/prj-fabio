<?php

namespace App\Http\Controllers;

use App\Models\Star;
use App\Models\Movie;
use Illuminate\Http\Request;

class StarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Star::all();
        return view('star/stars_list', [
            'stars' => $movies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('star/star_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $star = $request->name;
        Star::firstOrCreate(['name' => $star]);
        return redirect()->route('star.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function show(Star $star)
    {
        return view('star/star_read', [
            'star' => $star
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function edit(Star $star)
    {
        return view('star/star_update', [
            'star' => $star
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Star $star)
    {
        $star->name = $request->name;
        $star->save();

        return redirect()->route('star.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function destroy(Star $star)
    {
        $star->delete();
        return redirect()->route('star.index');
    }

    public function star_attach(Request $request, Star $star, Movie $movie)
    {
        dd($request->all());
        $star = Star::where('name', $request->star)->first();
        $star->movies()->attach($movie->id);
        return redirect()->back();
    }

    public function detach(Request $request, Star $star)
    {
        // dd($request->all());
        $movie = Movie::where('id', $request->movie)->first();
        $movie->stars()->detach($request->star);
        // $star->movies()->detach();
        return redirect()->back();
    }
}
