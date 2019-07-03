<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Movie;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actors=Actor::all();
        return view('actores')->with('actors', $actors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $actors= Actor::all();
        $movies= Movie::all();

        return view('addActor', compact('actors'), compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $actor= new Actor;
        $actor->first_name=$request->first_name;
        $actor->last_name=$request->last_name;
        $actor->rating=$request->rating;
        //$actor->fav_movie=$request->fav_movie; En la tabla de la db la fila es movie_id.

        $actor->save();

        return redirect('/actores');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $actor=Actor::find($id);
        return view('actor')->with('actor', $actor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $actor=Actor::find($id);
        return view('editActor', compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $actor=Actor::find($request->id);

        $actor->first_name=$request->first_name;
        $actor->last_name=$request->last_name;
        $actor->rating=$request->rating;
        //$actor->fav_movie=$request->fav_movie; En la tabla de la db la fila es movie_id.

        $actor->save();

        return redirect('/actores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actor  $actor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actor $actor)
    {
        //
    }
    public function buscarActor($nombre){
      $actors=Actor::where('first_name', 'like', "%$nombre%")->get();
      return $actors;
    }
    public function search(){
      $actors=ActorController::buscarActor($_GET['name']);
      return view('actores')->with('actors', $actors);
    }
}
