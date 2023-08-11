<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return response()->json($games);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {    
        $game = new Game;
        $game->name = $request->input('name');
        $game->category_id = $request->input('category_id');
        $game->save();
        return response()->json($game, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $game = Game::find($id);
        return response()->json($game);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $game = Game::find($id);
        $game->name = $request->input('name');
        $game->category_id = $request->input('category_id');
        $game->save();
        return response()->json($game);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $game = Game::find($id);
        $game->delete();
        return response()->json(null, 204);
    }

}
