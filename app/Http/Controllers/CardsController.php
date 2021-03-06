<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('cards.index',compact('cards'));
    }

    public function show(Card $card)
    {
      //  dd($card);
       $card->load('notes.user');
       return view('cards.show',compact('card'));
    }

    
}
