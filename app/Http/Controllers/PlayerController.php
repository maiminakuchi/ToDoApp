<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    //
    public function index() {
        $players = Player::all();
        return view('players.index',compact('players'));
    }
    // public function index() {
    //     $params = [
    //         'test' => 'これはテストです。',
    //         'sample' => 'これはサンプルです。'
    //     ];
    //     return view('players.index',compact('params'));
    // }
}
