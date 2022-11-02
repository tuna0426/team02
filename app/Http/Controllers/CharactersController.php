<?php

namespace App\Http\Controllers;
use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index(){
        $characters =character::all();
        return view ('characters.index',['characters'=>$characters]);
    }
}
