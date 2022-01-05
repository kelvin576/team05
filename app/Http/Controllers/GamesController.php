<?php

namespace App\Http\Controllers;

use App\Models\game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = game::all()->sortByDesc('gid');
        return view('games.index')->with(['games'=>$games]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $name = $request->input('name');
        $platform = $request->input('platform');
        $developer = $request->input('developer');
        $publisher = $request->input('publisher');
        $gid = $request->input('gid');

        game::create(
            [
                'name' => $name,
                'platform' => $platform,
                'developer' => $developer,
                'publisher' => $publisher,
                'gid' => $gid
            ]
        );
        return redirect('games');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $games=Game::findOrFail($id);
        return view('games.show') -> with(['games'=>$games]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $games=Game::findOrFail($id);
        return view('games.edit') -> with(['games'=>$games]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $games=Game::findOrFail($id);
        $games->name = $request->input('name');
        $games->platform = $request->input('platform');
        $games->developer = $request->input('developer');
        $games->publisher = $request->input('publisher');
        $games->gid = $request->input('gid');
        $games->save();

        return redirect('games');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = game::findOrFail($id);
        $game->delete();
        return redirect('games');
    }
    public function senior()
    {
        $games = game::senior()->get();
        return view('games.index',['games'=> $games]);
    }
    public function platforma()
    {
        $games = Game::platforma('清版動作')->get();
        return view('games.index',['games'=>$games]);
    }
    public function platformb()
    {
        $games = Game::platformb('冒險')->get();
        return view('games.index',['games'=>$games]);
    }
    public function platformc()
    {
        $games = Game::platformc('第一人稱射擊')->get();
        return view('games.index',['games'=>$games]);
    }
    public function platformd()
    {
        $games = Game::platformd('益智')->get();
        return view('games.index',['games'=>$games]);
    }
    public function platforme()
    {
        $games = Game::platforme('運動類')->get();
        return view('games.index',['games'=>$games]);
    }
    public function  api_games()
    {
        return Game::all();
    }
    public function  api_update(Request $request)
    {
        $game = Game::find($request->input('id'));
        if($game == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        $game->name = $request->input('name');
        $game->platform = $request->input('platform');
        $game->developer = $request->input('developer');
        $game->publisher = $request->input('publisher');
        $game->gid = $request->input('gid');
        if($game->save())
        {
            return response()->json([
                'status'=>1,
            ]);
        }else{
            return response()->json([
                'status'=>0,
            ]);
        }
    }
    public function api_delete(Request $request)
    {
        $game = Game::find($request->input('id'));

        if($game == null)
        {
            return response()->json([
                'status'=>0,
            ]);
        }

        if ($game->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
