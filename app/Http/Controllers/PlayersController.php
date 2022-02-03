<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayersController extends Controller
{
    public function index() {
        $players = Player::all();
        // dd($players);
        return view('players.index',compact('players'));
    }
    // public function index() {
    //     $params = [
    //         'test' => 'これはテストです。',
    //         'sample' => 'これはサンプルです。'
    //     ];
    //     return view('players.index',compact('params'));
    // }
    /**
     * テスト文章を表示する
     * @return test
     */
    // public function index() {
    //     echo 'test';
    // }
}
