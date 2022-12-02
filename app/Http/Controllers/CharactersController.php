<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\Character;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Request;
use Illuminate\Support\Facades\DB;
class CharactersController extends Controller
{
    public function store()
    {
        $input=Request::all();
        Character::create($input);
        return redirect('characters');
    }
    public function index()
    {
        $characters = Character::all();
        return view ('characters.index', ['characters'=>$characters]);
    }
    public function show($id)
    {
        $character = Character::findOrFail($id);
        $camp = Camp::findOrFail($character->cid);

    return view('characters.show', ['character' => $character, 'camp_name' => $camp->name]);
    }
    public function destroy($id)
    {
        //return $id;
        $character = Character::findOrFail($id);
        $character->delete();
        return redirect('characters');
    }
    public function create()
    {

        $tags= Camp::orderBy('camps.id','asc')->pluck('camps.name','camps.id');
        return view('characters.create',["camps" =>$tags]);
    }
    public function edit($id)
    {
        $character = Character::findOrFail($id);
        $tags= Camp::orderBy('camps.id','asc')->pluck('camps.name','camps.id');
        $selectType=$character->type;
        $selectTags=$character->cid;
        $selectGet=$character->get;
        $selectRarity=$character->rarity;
        return view('characters.edit',
        ["camps" =>$tags,'character'=>$character,'selectedCid'=>$selectTags,'selectedType'=>$selectType,'selectedGet'=>$selectGet,'selectedRarity'=>$selectRarity]);
    }
    public function update($id)
    {
        $input=Request::all();
        $character = Character::findOrFail($id);

        $character->name=$input->name;
        $character->cid=$input->cid;
        $character->rank =$input->rank;
        $character->type=$input->type;
        $character->get=$input->get;
        $character->rarity=$input->rarity;
        $character->build_at=$input->build_at;
        $character->year=$input->year;
        $character->displacement=$input->displacement;
        $character->save();
        return redirect('characters');
    }
}
