<?php

namespace App\Http\Controllers;

use App\Player;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $response = Player::select([
            'id',
            'name'
        ])
            ->withCount('games')
            ->orderBy('id', 'desc')
            ->get();

        return response()->json(
            $response
        );
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
        //todo: validation

        $name = request()->get('name');

        try {
            DB::beginTransaction();
            $entry = new Player();
            $entry->name = $name;
            $entry->save();

            DB::commit();
            return response()->json([
                'status' => 200,
                'message' => 'You have successfully created a new Player.'
            ]);
        } catch (QueryException $e) {
            DB::rollBack();

            return response()->json([
                'status' => 500,
                'message' => 'There was an internal error.'
            ]);
        }
    }

    /**
     * Return the entry to populate show Front End side
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $entry = Player::with('games')
                ->withCount('games')
                ->find($id);


            Log::info($entry);

            return response()->json([
                'status' => 200,
                'data' => $entry
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 500,
                'message' => 'There was an internal error.'
            ]);
        }
    }

    /**
     * Return the entry to populate edit form Front End side
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $entry = Player::find($id);

            return response()->json([
                'status' => 200,
                'data' => $entry
            ]);
        } catch (QueryException $e) {
            return response()->json([
                'status' => 500,
                'message' => 'There was an internal error.'
            ]);
        }
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
        //todo: validation
        $name = request()->get('name');

        try {
            DB::beginTransaction();
            $entry = Player::find($id);
            $entry->name = $name;
            $entry->save();

            DB::commit();
            return response()->json([
                'status' => 200,
                'message' => 'You have successfully updated Player ' . $entry->name . '.'
            ]);
        } catch (QueryException $e) {
            DB::rollBack();
            return response()->json([
                'status' => 500,
                'message' => 'There was an internal error.'
            ]);
        }
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
