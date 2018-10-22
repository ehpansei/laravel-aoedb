<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Game::select([
            'id as id',
            'enemy_elo as enemyElo',
            'difficulty as difficulty',
            'result as result',
            'enemy_name as enemyName',
            'comment as comment'
        ])->orderBy('id', 'desc')
            ->get();
//            ->paginate(10);

        Log::info($response->toJson());


        return response()->json([
            $response
        ]);
    }

    public function gamesResults() {
        Log::info('GAMES RESULTS');

        $result = Game::select([
            'result'
        ])->pluck('result');

        Log::info($result);

        return response()->json([
            $result
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Log::info($request);
        Log::info(request()->get('enemyName'));


        $enemyName = request()->get('enemyName');
        $enemyElo = request()->get('enemyElo');
        $difficulty = 1;
        $result = 1;
        $comment = request()->get('comment');
        $userId = 1;

        try {
            $entry = new Game();
            $entry->user_id = $userId;
            $entry->enemy_elo = $enemyElo;
            $entry->difficulty = $difficulty;
            $entry->result = $result;
            $entry->enemy_name = $enemyName;
            $entry->comment = $comment;
            $entry->save();
            Log::info('save');

            return response()->json([
                'status' => 200,
                'message' => 'You have successfully created a new Player.'
            ]);
        } catch (QueryException $e) {
            Log::info($e);

            return response()->json([
                'status' => 500,
                'message' => 'There was an internal error.'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Log::info('SHOW GAME');
        Log::info($id);

        $entry = Game::find($id);
        Log::info($entry);


        return response()->json([
            $entry
//            'status' => 200,
//            'data' => $entry
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
