<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
        $notes = new Note();
        $notes->description = $request->description;
        $card->notes()->save($notes);
        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit',compact('note'));
    }

    public function update(Request $request,Note $note)
    {
        $note->update($request->all());
        return back();
    }
}
