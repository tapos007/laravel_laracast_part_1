<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        $people = ["tapos","sharif","sanjib"];
        return view('pages.about',compact('people'));
    }
}
