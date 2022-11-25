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
        $camps = DB::table('camps')
            ->select('camps.id', 'camps.name')
            ->orderBy('camps.id', 'asc')
            ->get();

        $data = [];
        foreach ($camps as $camp)
        {
            $data[$camp->id] = $camp->name;
        }
        return view('characters.create',["camps" =>$data]);
    }
}
