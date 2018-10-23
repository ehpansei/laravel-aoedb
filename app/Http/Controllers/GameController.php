<?php

namespace App\Http\Controllers;

use App\Game;
use App\Player;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

use App\Traits\CreateAndStorePlayer;

class GameController extends Controller
{

    use CreateAndStorePlayer;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Game::join('players', 'games.player_id', '=', 'players.id')
            ->where('games.user_id', 1)
            ->select([
                'games.id as id',
                'games.enemy_elo as enemyElo',
                'games.difficulty as difficulty',
                'games.result as result',
                'players.name as enemyName',
                'games.comment as comment'
            ])->orderBy('id', 'desc')
            ->get();


        return response()->json([
            'data' => [
                $response
            ]
        ]);
    }

    public function gamesResults()
    {
        $result = Game::select([
            'result'
        ])->pluck('result');

        return response()->json([
            'data' => [
                $result
            ]
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
        $enemyName = request()->get('enemyName');
        $enemyElo = request()->get('enemyElo');
        $difficulty = 1;
        $result = 1;
        $comment = request()->get('comment');
        $userId = 1;

        try {
            DB::beginTransaction();
            $entry = new Game();
            $entry->user_id = $userId;
            $entry->enemy_elo = $enemyElo;
            $entry->difficulty = $difficulty;
            $entry->result = $result;

            //check if given player name already exists on the database
            $player = Player::where('name', $enemyName)->first();
            if(count($player)) {
                //player already exists, use its ID
                $entry->player_id = $player->id;
            } else {
                //player doesnt exist yet, create it and store its ID
                $entry->player_id = $this->createAndStorePlayer($enemyName);
            }

            $entry->comment = $comment;
            $entry->save();

            DB::commit();
            return response()->json([
                'data' => [
                    'status' => 200,
                    'message' => 'You have successfully created a new Player.'
                ]
            ]);
        } catch (QueryException $e) {
            DB::rollBack();

            return response()->json([
                'data' => [
                    'status' => 500,
                    'message' => 'There was an internal server error.'
                ]
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
        $entry = Game::find($id);

        return response()->json([
            'data' => [
                $entry
            ]
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
