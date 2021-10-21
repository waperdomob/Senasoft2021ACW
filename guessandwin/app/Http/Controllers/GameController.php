<?php

namespace App\Http\Controllers;


use App\Models\Card;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('game.index2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_user = auth()->user()->id;
        $datos = request()->except('_token'); 
        $game_id= $datos['id'];
        $game = DB::table('games')->where('id', $game_id)->first();
        if ($game) {
            return "Ya existe un juego con ese codigo";
        }
        else{
            Game::insert($datos);
            User::where('id','=',$id_user)->where('id','=',$id_user)->update(['game_id' => $game_id]);
            
            return [$datos,$id_user,$game_id];
        }
        
    }

    public function store2(Request $request)
    {
        
        $id_user = auth()->user()->id;
        $datos = request()->except(['_token','_method']); 
        $game_id= $datos['id'];
        
        $game = DB::table('games')->where('id', $game_id)->first();
        
        $count = $game->count;
        
        if ($game) {

            $user_check = DB::table('users')->where('id',$id_user)->where('game_id', $game_id)->first();

            if ($user_check) {
                
                return "Usted ya está en la partida";
            }

            else{               

                if ($count < 4) 
                {
                    $count = $count + 1;
                    User::where('id','=',$id_user)->update(['game_id' => $game_id]);
                    Game::where('id','=',$game_id)->update(['count' => $count]);
                    return "HA INGRESADO AL JUEGO";
                    
                }
                if ($count == 4) {
                    Card::where('id','!=',NULL)->update(['bug_id'=>NULL, 'user_id' =>NULL]);
                    $cartas = barajar_cartas(); 
                    return $cartas; 
                }
                else {
                    return redirect()->route('game.index')->with('mensaje','Esta sala está llena ');
                }
            }
        }
        else {
            return redirect()->route('game.index')->with('mensaje','Esta sala no existe ');
        }

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
    
}
